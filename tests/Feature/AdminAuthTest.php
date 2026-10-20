<?php

use App\Models\AdminUser;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function makeAdmin(array $overrides = []): AdminUser
{
    return AdminUser::create(array_merge([
        'name' => 'Admin',
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
        'role' => 'super_admin',
        'is_active' => true,
    ], $overrides));
}

test('the admin login page renders', function () {
    $this->get('/admin/login')
        ->assertOk()
        ->assertSee('Iniciar Sesión');
});

test('the admin dashboard requires authentication', function () {
    $this->get('/admin')->assertRedirect('/admin/login');
});

test('an admin can log in', function () {
    $admin = makeAdmin();

    $this->post('/admin/login', [
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticatedAs($admin, 'admin');
});

test('the logout button is rendered on every admin page', function () {
    $this->actingAs(makeAdmin(), 'admin')
        ->get('/admin')
        ->assertOk()
        ->assertSee('Cerrar sesión', false)
        ->assertSee('/admin/logout', false)
        ->assertSee('name="_token"', false);
});

test('an admin can log out', function () {
    $this->actingAs(makeAdmin(), 'admin')
        ->post('/admin/logout')
        ->assertRedirect(route('admin.login'));

    $this->assertGuest('admin');
});

test('an inactive admin cannot log in', function () {
    makeAdmin(['is_active' => false]);

    $this->post('/admin/login', [
        'email' => 'admin@linkjobs.com',
        'password' => 'password',
    ]);

    $this->assertGuest('admin');
});
