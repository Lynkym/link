<?php

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

function makeAdminGuardUser(array $overrides = []): AdminUser
{
    return AdminUser::create(array_merge([
        'name' => 'Admin',
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
        'role' => 'admin',
        'is_active' => true,
    ], $overrides));
}

test('the login page renders', function () {
    $this->get('/login')
        ->assertOk()
        ->assertSee('Sign In');
});

test('a user can log in with valid credentials', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect('/');
    $this->assertAuthenticatedAs($user);
});

test('a developer is redirected to their profile after login', function () {
    $user = User::factory()->create(['password' => 'password']);
    $user->syncRoles(['developer']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect('/profile');
});

test('a recruiter is redirected to the jobs board after login', function () {
    $user = User::factory()->create(['password' => 'password']);
    $user->syncRoles(['recruiter']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect('/jobs');
});

test('an admin is redirected to the admin dashboard after login', function () {
    $user = User::factory()->create(['password' => 'password']);
    $user->syncRoles(['admin']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));
});

test('the user is always taken to their own panel after login', function () {
    $user = User::factory()->create(['password' => 'password']);
    $user->syncRoles(['developer']);

    $this->from('/jobs')
        ->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])
        ->assertRedirect('/profile');
});

test('a public admin is automatically logged into the admin guard', function () {
    makeAdminGuardUser();

    $user = User::factory()->create([
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
    ]);
    $user->syncRoles(['admin']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticatedAs($user, 'web');
    $this->assertAuthenticated('admin');

    $this->get('/admin')->assertOk();
});

test('a public admin without an admin account is not logged into the admin guard', function () {
    $user = User::factory()->create(['password' => 'password']);
    $user->syncRoles(['admin']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertGuest('admin');
    $this->get('/admin')->assertRedirect('/admin/login');
});

test('an inactive admin account is not used for the automatic login', function () {
    makeAdminGuardUser(['is_active' => false]);

    $user = User::factory()->create([
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
    ]);
    $user->syncRoles(['admin']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertGuest('admin');
});

test('a public super admin is not logged into the admin guard', function () {
    Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
    makeAdminGuardUser();

    $user = User::factory()->create([
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
    ]);
    $user->syncRoles(['super_admin']);

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertGuest('admin');
});

test('logging out of the public site also logs out of the admin guard', function () {
    $user = User::factory()->create();
    $admin = makeAdminGuardUser();

    $this->actingAs($user)
        ->actingAs($admin, 'admin')
        ->post('/logout')
        ->assertRedirect('/');

    $this->assertGuest('web');
    $this->assertGuest('admin');
});

test('login fails with invalid credentials', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $response = $this->from('/login')->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertRedirect('/login');
    $response->assertSessionHasErrors('email');
    $this->assertGuest();
});

test('an authenticated user cannot visit the login page', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/login')
        ->assertRedirect('/');
});

test('a user can log out', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post('/logout')
        ->assertRedirect('/');

    $this->assertGuest();
});
