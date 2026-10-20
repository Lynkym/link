<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
