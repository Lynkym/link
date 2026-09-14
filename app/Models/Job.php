<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_offers';

    protected $fillable = [
        'title',
        'company',
        'location',
        'work_mode',
        'salary_min',
        'salary_max',
        'description',
        'stack',
        'status',
        'contact_email',
    ];

    protected function casts(): array
    {
        return [
            'stack' => 'array',
        ];
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'active' => 'Activo',
            'pending' => 'Pendiente',
            'closed' => 'Cerrado',
            default => 'Desconocido',
        };
    }

    public function getWorkModeLabelAttribute(): string
    {
        return match ($this->work_mode) {
            'remote' => 'Remoto',
            'onsite' => 'Presencial',
            'hybrid' => 'Híbrido',
            default => 'Desconocido',
        };
    }

    public function getSalaryRangeAttribute(): ?string
    {
        if ($this->salary_min && $this->salary_max) {
            return '$'.number_format($this->salary_min).' - $'.number_format($this->salary_max);
        }

        return null;
    }
}
