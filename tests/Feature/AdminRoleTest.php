<?php

use App\Models\AdminUser;
use Database\Seeders\RolesPermissionsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(RolesPermissionsSeeder::class);

    $this->admin = AdminUser::create([
        'name' => 'Admin',
        'email' => 'admin-roles@linkjobs.test',
        'password' => 'password',
        'role' => 'super_admin',
        'is_active' => true,
    ]);
});

test('updating a role syncs the selected permissions by id', function () {
    $role = Role::where('name', 'developer')->firstOrFail();
    $ids = Permission::whereIn('name', ['manage-jobs', 'manage-users'])->pluck('id')->all();

    $this->actingAs($this->admin, 'admin')
        ->put(route('admin.roles.update', $role), [
            'name' => 'developer',
            'permissions' => $ids,
        ])
        ->assertRedirect(route('admin.roles.index'));

    expect($role->fresh()->permissions->pluck('name')->sort()->values()->all())
        ->toBe(['manage-jobs', 'manage-users']);
});

test('updating a role without permissions removes all of them', function () {
    $role = Role::where('name', 'recruiter')->firstOrFail();

    expect($role->permissions)->not->toBeEmpty();

    $this->actingAs($this->admin, 'admin')
        ->put(route('admin.roles.update', $role), ['name' => 'recruiter'])
        ->assertRedirect(route('admin.roles.index'));

    expect($role->fresh()->permissions)->toBeEmpty();
});

test('creating a role syncs the selected permissions by id', function () {
    $ids = Permission::whereIn('name', ['view-dashboard', 'manage-settings'])->pluck('id')->all();

    $this->actingAs($this->admin, 'admin')
        ->post(route('admin.roles.store'), [
            'name' => 'auditor',
            'permissions' => $ids,
        ])
        ->assertRedirect(route('admin.roles.index'));

    $role = Role::where('name', 'auditor')->firstOrFail();

    expect($role->permissions->pluck('name')->sort()->values()->all())
        ->toBe(['manage-settings', 'view-dashboard']);
});

test('the role name can be changed', function () {
    $role = Role::where('name', 'developer')->firstOrFail();

    $this->actingAs($this->admin, 'admin')
        ->put(route('admin.roles.update', $role), [
            'name' => 'desarrollador',
            'permissions' => [],
        ])
        ->assertRedirect(route('admin.roles.index'));

    expect($role->fresh()->name)->toBe('desarrollador');
});
