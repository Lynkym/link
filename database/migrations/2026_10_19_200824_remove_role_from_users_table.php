<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'role')) {
            return;
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        foreach (['developer', 'recruiter', 'admin'] as $name) {
            Role::findOrCreate($name, 'web');
        }

        User::query()->get()->each(function (User $user) {
            if (filled($user->role)) {
                $user->syncRoles([$user->role]);
            }
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['developer', 'recruiter', 'admin'])->default('developer')->after('email');
        });

        User::query()->get()->each(function (User $user) {
            $user->forceFill([
                'role' => $user->getRoleNames()->first() ?? 'developer',
            ])->save();
        });
    }
};
