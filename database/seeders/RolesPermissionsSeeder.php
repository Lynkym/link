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

        $recruiter = Role::firstOrCreate(['name' => 'recruiter', 'guard_name' => 'web']);
        $recruiter->syncPermissions(['view-dashboard', 'manage-jobs']);

        $developer = Role::firstOrCreate(['name' => 'developer', 'guard_name' => 'web']);
        $developer->syncPermissions(['view-dashboard']);

        Role::whereIn('name', ['editor', 'viewer'])->delete();
    }
}
