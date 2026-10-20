<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

test('guests see the sign in link in the navigation', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Sign In')
        ->assertDontSee('Cerrar sesión');
});

test('authenticated users see the logout button in the navigation', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee('Cerrar sesión')
        ->assertDontSee('Sign In');
});

test('the navigation shows the identity of the logged in user', function () {
    $user = User::factory()->create([
        'name' => 'Ada Lovelace',
    ]);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee('Ada Lovelace')
        ->assertSee('Sin rol');
});

test('the navigation shows the role label of the logged in user', function () {
    $user = User::factory()->create([
        'name' => 'Developer User',
    ]);

    $user->syncRoles(['developer']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee('Developer User')
        ->assertSee('Desarrollador');
});

test('the logout button is a post form with a csrf token', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/')
        ->assertSee('method="POST"', false)
        ->assertSee('name="_token"', false)
        ->assertSee('/logout', false);
});

test('the navigation reflects the auth state on the jobs page', function () {
    $this->get('/jobs')
        ->assertOk()
        ->assertDontSee('Cerrar sesión');

    $this->actingAs(User::factory()->create())
        ->get('/jobs')
        ->assertOk()
        ->assertSee('Cerrar sesión');
});

test('the name of a developer links to their profile panel', function () {
    $user = User::factory()->create(['name' => 'Ada Lovelace']);
    $user->syncRoles(['developer']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee(route('profile'), false);
});

test('the name of a recruiter links to the jobs board', function () {
    $user = User::factory()->create(['name' => 'Grace Hopper']);
    $user->syncRoles(['recruiter']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee(route('jobs'), false);
});

test('the name of an admin links to the admin dashboard', function () {
    $user = User::factory()->create(['name' => 'Admin User']);
    $user->syncRoles(['admin']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee(route('admin.dashboard'), false);
});

test('the name of a super admin links to the admin dashboard', function () {
    Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

    $user = User::factory()->create(['name' => 'Root User']);
    $user->syncRoles(['super_admin']);

    $this->actingAs($user)
        ->get('/')
        ->assertOk()
        ->assertSee(route('admin.dashboard'), false);
});

test('panel url falls back to home when the user has no role', function () {
    $user = User::factory()->create();

    expect($user->panelUrl())->toBe(route('home'));
});

test('the name link is present on every public page', function () {
    $user = User::factory()->create(['name' => 'Ada Lovelace']);
    $user->syncRoles(['developer']);

    foreach (['/', '/jobs', '/profile'] as $uri) {
        $this->actingAs($user)
            ->get($uri)
            ->assertOk()
            ->assertSee(route('profile'), false);
    }
});
