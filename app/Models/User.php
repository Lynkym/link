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
            default => 'Sin rol',
        };
    }
}
