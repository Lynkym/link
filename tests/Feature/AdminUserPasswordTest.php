<?php

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

function adminWithRole(string $role): AdminUser
{
    return AdminUser::create([
        'name' => 'Admin '.ucfirst($role),
        'email' => $role.'@linkjobs.test',
        'password' => 'password',
        'role' => $role,
        'is_active' => true,
    ]);
}

function updateUserPayload(User $user, array $overrides = []): array
{
    return array_merge([
        'name' => $user->name,
        'email' => $user->email,
        'role' => 'developer',
    ], $overrides);
}

test('the edit form shows the password fields to authorized admins', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create();

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->get(route('admin.users.edit', $user))
        ->assertOk()
        ->assertSee('name="password"', false)
        ->assertSee('name="password_confirmation"', false);
});

test('the edit form hides the password fields from moderators', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create();

    $this->actingAs(adminWithRole('moderator'), 'admin')
        ->get(route('admin.users.edit', $user))
        ->assertOk()
        ->assertDontSee('name="password"', false)
        ->assertSee('No tenés permiso para cambiar contraseñas');
});

test('a super admin can change a user password', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'password' => 'new-secret-123',
            'password_confirmation' => 'new-secret-123',
        ]))
        ->assertRedirect(route('admin.users.index'));

    $this->assertTrue(Hash::check('new-secret-123', $user->fresh()->password));
});

test('an admin can change a user password', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);

    $this->actingAs(adminWithRole('admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'password' => 'new-secret-123',
            'password_confirmation' => 'new-secret-123',
        ]))
        ->assertRedirect(route('admin.users.index'));

    $this->assertTrue(Hash::check('new-secret-123', $user->fresh()->password));
});

test('a moderator cannot change a user password', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);

    $this->actingAs(adminWithRole('moderator'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'password' => 'new-secret-123',
            'password_confirmation' => 'new-secret-123',
        ]))
        ->assertForbidden();

    $this->assertTrue(Hash::check('old-secret', $user->fresh()->password));
});

test('a moderator can still edit a user without sending a password', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);

    $this->actingAs(adminWithRole('moderator'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'name' => 'Renamed User',
            'password' => '',
            'password_confirmation' => '',
        ]))
        ->assertRedirect(route('admin.users.index'));

    $this->assertTrue(Hash::check('old-secret', $user->fresh()->password));
    $this->assertSame('Renamed User', $user->fresh()->name);
});

test('the password must be at least 8 characters', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create();

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'password' => 'short',
            'password_confirmation' => 'short',
        ]))
        ->assertSessionHasErrors('password');
});

test('the password must be confirmed', function () {
    Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
    $user = User::factory()->create();

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'password' => 'new-secret-123',
            'password_confirmation' => 'different',
        ]))
        ->assertSessionHasErrors('password');
});

test('promoting a user to admin creates the matching admin account', function () {
    Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, ['role' => 'admin']))
        ->assertRedirect(route('admin.users.index'));

    $admin = AdminUser::where('email', $user->email)->first();

    expect($admin)->not->toBeNull()
        ->and($admin->role)->toBe('admin')
        ->and($admin->is_active)->toBeTrue()
        ->and(Hash::check('old-secret', $admin->password))->toBeTrue();
});

test('changing the password of an admin user also updates the admin account', function () {
    Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
    $user = User::factory()->create(['password' => 'old-secret']);
    $user->syncRoles(['admin']);
    $user->syncAdminAccount();

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'role' => 'admin',
            'password' => 'new-secret-123',
            'password_confirmation' => 'new-secret-123',
        ]))
        ->assertRedirect(route('admin.users.index'));

    $admin = AdminUser::where('email', $user->email)->first();

    expect(Hash::check('new-secret-123', $admin->password))->toBeTrue();
});

test('renaming an admin user keeps the same admin account', function () {
    Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
    $user = User::factory()->create([
        'email' => 'before@linkjobs.com',
        'password' => 'secret-1234',
    ]);
    $user->syncRoles(['admin']);
    $user->syncAdminAccount();

    $this->actingAs(adminWithRole('super_admin'), 'admin')
        ->put(route('admin.users.update', $user), updateUserPayload($user, [
            'email' => 'after@linkjobs.com',
            'role' => 'admin',
        ]))
        ->assertRedirect(route('admin.users.index'));

    expect(AdminUser::where('email', 'after@linkjobs.com')->exists())->toBeTrue()
        ->and(AdminUser::where('email', 'before@linkjobs.com')->exists())->toBeFalse()
        ->and(AdminUser::count())->toBe(2);
});
