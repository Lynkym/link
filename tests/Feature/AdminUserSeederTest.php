<?php

use App\Models\AdminUser;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('the seeder creates a dedicated super admin account', function () {
    $this->seed(AdminUserSeeder::class);

    $superAdmin = AdminUser::where('email', 'superadmin@linkjobs.com')->first();

    expect($superAdmin)->not->toBeNull()
        ->and($superAdmin->role)->toBe('super_admin')
        ->and($superAdmin->is_active)->toBeTrue()
        ->and(Hash::check('SuperAdmin2026*', $superAdmin->password))->toBeTrue();
});

test('the seeder keeps a separate admin account for the public site administrator', function () {
    $this->seed(AdminUserSeeder::class);

    $admin = AdminUser::where('email', 'admin@linkjobs.com')->first();

    expect($admin)->not->toBeNull()
        ->and($admin->role)->toBe('admin')
        ->and($admin->is_active)->toBeTrue()
        ->and(Hash::check('password', $admin->password))->toBeTrue();
});

test('the super admin uses an email that is not shared with the admin account', function () {
    $this->seed(AdminUserSeeder::class);

    expect(AdminUser::where('role', 'super_admin')->pluck('email')->all())
        ->toBe(['superadmin@linkjobs.com']);
});
