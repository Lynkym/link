<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'manage-users' => 'Gestionar usuarios',
            'manage-jobs' => 'Gestionar empleos',
            'manage-roles' => 'Gestionar roles',
            'manage-permissions' => 'Gestionar permisos',
            'manage-settings' => 'Gestionar configuración',
            'view-dashboard' => 'Ver dashboard',
        ];

        foreach ($permissions as $name => $label) {
            Permission::firstOrCreate(['name' => $name, 'guard_name' => 'web']);
        }

        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $admin->syncPermissions(Permission::all());

        $editor = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        $editor->syncPermissions(['view-dashboard', 'manage-jobs']);

        $viewer = Role::firstOrCreate(['name' => 'viewer', 'guard_name' => 'web']);
        $viewer->syncPermissions(['view-dashboard']);
    }
}
