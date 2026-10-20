<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        $developer = User::updateOrCreate(
            ['email' => 'developer@linkjobs.com'],
            [
                'name' => 'Developer User',
                'password' => Hash::make('password'),
            ]
        );
        $developer->syncRoles(['developer']);

        $recruiter = User::updateOrCreate(
            ['email' => 'recruiter@linkjobs.com'],
            [
                'name' => 'Recruiter User',
                'password' => Hash::make('password'),
            ]
        );
        $recruiter->syncRoles(['recruiter']);

        $admin = User::updateOrCreate(
            ['email' => 'admin@linkjobs.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );
        $admin->syncRoles(['admin']);
    }
}
