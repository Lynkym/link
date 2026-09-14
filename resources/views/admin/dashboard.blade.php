@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="space-y-xl">
    {{-- Stats Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
        {{-- Total Users --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg relative overflow-hidden group hover:border-primary-fixed/30 transition-colors">
            <div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative">
                <div class="flex items-center justify-between mb-md">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Total Usuarios</span>
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-fixed">group</span>
                    </div>
                </div>
                <p class="font-headline-xl text-headline-xl text-on-surface">{{ $stats['total_users'] }}</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">
                    <span class="text-primary-fixed">+12%</span> este mes
                </p>
            </div>
        </div>

        {{-- Active Jobs --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg relative overflow-hidden group hover:border-primary-fixed/30 transition-colors">
            <div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative">
                <div class="flex items-center justify-between mb-md">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Empleos Activos</span>
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-fixed">work</span>
                    </div>
                </div>
                <p class="font-headline-xl text-headline-xl text-on-surface">24</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">
                    <span class="text-primary-fixed">+5%</span> esta semana
                </p>
            </div>
        </div>

        {{-- Pending Reviews --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg relative overflow-hidden group hover:border-primary-fixed/30 transition-colors">
            <div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative">
                <div class="flex items-center justify-between mb-md">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Pendientes</span>
                    <div class="w-10 h-10 rounded-lg bg-amber-500/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-400">pending</span>
                    </div>
                </div>
                <p class="font-headline-xl text-headline-xl text-on-surface">8</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">
                    Revisión requerida
                </p>
            </div>
        </div>

        {{-- Admins --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg relative overflow-hidden group hover:border-primary-fixed/30 transition-colors">
            <div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative">
                <div class="flex items-center justify-between mb-md">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Administradores</span>
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-fixed">shield</span>
                    </div>
                </div>
                <p class="font-headline-xl text-headline-xl text-on-surface">{{ $stats['total_admins'] }}</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">
                    Cuentas activas
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
        {{-- Recent Users --}}
        <div class="lg:col-span-2 bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20 flex items-center justify-between">
                <h2 class="font-headline-md text-headline-md text-on-surface">Usuarios Recientes</h2>
                <a href="{{ route('admin.users.index') }}" class="font-label-caps text-label-caps text-primary-fixed hover:underline">Ver todos</a>
            </div>
            <div class="divide-y divide-outline-variant/10">
                @forelse($stats['recent_users'] as $user)
                    <div class="px-lg py-md flex items-center gap-md hover:bg-surface-container/30 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-primary-fixed/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-headline-md text-headline-md text-primary-fixed">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-body-sm text-body-sm text-on-surface truncate">{{ $user->name }}</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant truncate">{{ $user->email }}</p>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $user->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <div class="px-lg py-xl text-center">
                        <span class="material-symbols-outlined text-on-surface-variant/30 text-[48px]">person_off</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">No hay usuarios registrados</p>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface">Acciones Rápidas</h2>
            </div>
            <div class="p-lg space-y-sm">
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-sm p-md rounded-lg hover:bg-surface-container/50 transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center group-hover:bg-primary-fixed/20 transition-colors">
                        <span class="material-symbols-outlined text-primary-fixed">person_add</span>
                    </div>
                    <div>
                        <p class="font-body-sm text-body-sm text-on-surface">Gestionar Usuarios</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Ver, editar, eliminar</p>
                    </div>
                </a>
                <a href="{{ route('admin.jobs.index') }}" class="flex items-center gap-sm p-md rounded-lg hover:bg-surface-container/50 transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center group-hover:bg-primary-fixed/20 transition-colors">
                        <span class="material-symbols-outlined text-primary-fixed">add_business</span>
                    </div>
                    <div>
                        <p class="font-body-sm text-body-sm text-on-surface">Gestionar Empleos</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Publicaciones y candidatos</p>
                    </div>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-sm p-md rounded-lg hover:bg-surface-container/50 transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center group-hover:bg-primary-fixed/20 transition-colors">
                        <span class="material-symbols-outlined text-primary-fixed">tune</span>
                    </div>
                    <div>
                        <p class="font-body-sm text-body-sm text-on-surface">Configuración</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Ajustes del sistema</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
