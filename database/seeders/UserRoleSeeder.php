<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'developer@linkjobs.com'],
            [
                'name' => 'Developer User',
                'password' => Hash::make('password'),
                'role' => 'developer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'recruiter@linkjobs.com'],
            [
                'name' => 'Recruiter User',
                'password' => Hash::make('password'),
                'role' => 'recruiter',
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@linkjobs.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );
    }
}
