<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isDeveloper(): bool
    {
        return $this->hasRole('developer');
    }

    public function isRecruiter(): bool
    {
        return $this->hasRole('recruiter');
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function panelUrl(): string
    {
        return match (true) {
            $this->isDeveloper() => route('profile'),
            $this->isRecruiter() => route('jobs'),
            $this->hasRole(['admin', 'super_admin']) => route('admin.dashboard'),
            default => route('home'),
        };
    }

    public function syncAdminAccount(?string $previousEmail = null, ?string $plainPassword = null): void
    {
        if (! $this->hasRole('admin')) {
            return;
        }

        $admin = AdminUser::query()
            ->where('email', $previousEmail ?? $this->email)
            ->first();

        if ($admin === null) {
            $admin = new AdminUser([
                'email' => $this->email,
                'role' => 'admin',
                'is_active' => true,
                'password' => $plainPassword ?? $this->password,
            ]);
        } else {
            $admin->email = $this->email;

            if ($plainPassword !== null) {
                $admin->password = $plainPassword;
            }
        }

        $admin->name = $this->name;
        $admin->save();
    }

    public function getRoleLabelAttribute(): string
    {
        return self::roleLabel($this->getRoleNames()->first() ?? '');
    }

    public static function roleLabel(string $role): string
    {
        return match ($role) {
            'developer' => 'Desarrollador',
            'recruiter' => 'Reclutador',
            'admin' => 'Administrador',
            'super_admin' => 'Super Admin',
            default => 'Sin rol',
        };
    }
}
