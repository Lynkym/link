<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::updateOrCreate(
            ['email' => 'superadmin@linkjobs.com'],
            [
                'name' => 'Super Administrador',
                'password' => Hash::make('SuperAdmin2026*'),
                'role' => 'super_admin',
                'is_active' => true,
            ]
        );

        AdminUser::updateOrCreate(
            ['email' => 'admin@linkjobs.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );
    }
}
