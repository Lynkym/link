<?php

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

function makeAdminForCreate(string $role): AdminUser
{
    return AdminUser::create([
        'name' => 'Admin '.ucfirst($role),
        'email' => $role.'@linkjobs.test',
        'password' => 'password',
        'role' => $role,
        'is_active' => true,
    ]);
}

test('the create user form renders with the role selector', function () {
    $this->actingAs(makeAdminForCreate('super_admin'), 'admin')
        ->get(route('admin.users.create'))
        ->assertOk()
        ->assertSee('name="name"', false)
        ->assertSee('name="email"', false)
        ->assertSee('name="role"', false)
        ->assertSee('name="password"', false)
        ->assertSee('Desarrollador')
        ->assertSee('Reclutador');
});

test('the new user button links to the create form', function () {
    $this->actingAs(makeAdminForCreate('admin'), 'admin')
        ->get(route('admin.users.index'))
        ->assertOk()
        ->assertSee(route('admin.users.create'), false);
});

test('an authorized admin can create a user with a role and password', function () {
    Role::firstOrCreate(['name' => 'recruiter', 'guard_name' => 'web']);

    $this->actingAs(makeAdminForCreate('super_admin'), 'admin')
        ->post(route('admin.users.store'), [
            'name' => 'Nuevo Usuario',
            'email' => 'nuevo@linkjobs.com',
            'role' => 'recruiter',
            'password' => 'secret-1234',
            'password_confirmation' => 'secret-1234',
        ])
        ->assertRedirect(route('admin.users.index'));

    $user = User::where('email', 'nuevo@linkjobs.com')->firstOrFail();

    expect($user->name)->toBe('Nuevo Usuario')
        ->and($user->hasRole('recruiter'))->toBeTrue()
        ->and(Hash::check('secret-1234', $user->password))->toBeTrue();
});

test('a moderator cannot create users', function () {
    $this->actingAs(makeAdminForCreate('moderator'), 'admin')
        ->post(route('admin.users.store'), [
            'name' => 'Nuevo Usuario',
            'email' => 'nuevo@linkjobs.com',
            'role' => 'developer',
            'password' => 'secret-1234',
            'password_confirmation' => 'secret-1234',
        ])
        ->assertForbidden();

    $this->assertDatabaseMissing('users', ['email' => 'nuevo@linkjobs.com']);
});

test('the password is required when creating a user', function () {
    $this->actingAs(makeAdminForCreate('super_admin'), 'admin')
        ->post(route('admin.users.store'), [
            'name' => 'Nuevo Usuario',
            'email' => 'nuevo@linkjobs.com',
            'role' => 'developer',
            'password' => '',
            'password_confirmation' => '',
        ])
        ->assertSessionHasErrors('password');

    $this->assertDatabaseMissing('users', ['email' => 'nuevo@linkjobs.com']);
});

test('the email must be unique when creating a user', function () {
    User::factory()->create(['email' => 'dup@linkjobs.com']);

    $this->actingAs(makeAdminForCreate('super_admin'), 'admin')
        ->post(route('admin.users.store'), [
            'name' => 'Nuevo Usuario',
            'email' => 'dup@linkjobs.com',
            'role' => 'developer',
            'password' => 'secret-1234',
            'password_confirmation' => 'secret-1234',
        ])
        ->assertSessionHasErrors('email');
});

test('the role is required when creating a user', function () {
    $this->actingAs(makeAdminForCreate('super_admin'), 'admin')
        ->post(route('admin.users.store'), [
            'name' => 'Nuevo Usuario',
            'email' => 'nuevo@linkjobs.com',
            'role' => '',
            'password' => 'secret-1234',
            'password_confirmation' => 'secret-1234',
        ])
        ->assertSessionHasErrors('role');
});
