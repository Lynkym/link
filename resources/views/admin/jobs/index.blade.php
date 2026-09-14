@extends('admin.layout')

@section('title', 'Empleos')
@section('header', 'Gestión de Empleos')

@section('actions')
<a href="{{ route('admin.jobs.create') }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">add</span>
    Nueva Oferta
</a>
@endsection

@section('content')
<div class="space-y-lg">
    {{-- Search & Filters --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg">
        <form action="{{ route('admin.jobs.index') }}" method="GET" class="space-y-md">
            <div class="flex flex-col md:flex-row gap-md">
                <div class="flex-1 relative group rounded bg-background border border-outline-variant transition-all duration-200">
                    <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
                        <span class="material-symbols-outlined" style="font-size: 20px;">search</span>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}"
                           class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-sm text-body-sm placeholder-on-surface-variant/50 focus:ring-0"
                           placeholder="Buscar por título, empresa o ubicación...">
                </div>
                <select name="status" class="bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20">
                    <option value="">Todos los estados</option>
                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Activos</option>
                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pendientes</option>
                    <option value="closed" {{ request('status') === 'closed' ? 'selected' : '' }}>Cerrados</option>
                </select>
                <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95">
                    Buscar
                </button>
            </div>
        </form>
    </div>

    {{-- Jobs Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        @forelse($jobs as $job)
            <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden hover:border-primary-fixed/30 transition-all group flex flex-col">
                <div class="p-lg flex-1 flex flex-col">
                    <div class="flex items-start justify-between mb-md">
                        <div class="flex items-center gap-sm">
                            <div class="w-11 h-11 rounded-lg bg-surface border border-outline-variant/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-surface-variant">business</span>
                            </div>
                            <div class="min-w-0">
                                <p class="font-body-sm text-body-sm text-on-surface font-medium truncate">{{ $job->company }}</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">{{ $job->location }}</p>
                            </div>
                        </div>
                        @if($job->status === 'active')
                            <span class="font-label-caps text-label-caps bg-primary-fixed/10 text-primary-fixed px-sm py-xs rounded-full flex-shrink-0">Activo</span>
                        @elseif($job->status === 'pending')
                            <span class="font-label-caps text-label-caps bg-amber-500/10 text-amber-400 px-sm py-xs rounded-full flex-shrink-0">Pendiente</span>
                        @else
                            <span class="font-label-caps text-label-caps bg-error-container/10 text-error px-sm py-xs rounded-full flex-shrink-0">Cerrado</span>
                        @endif
                    </div>

                    <h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary-fixed transition-colors mb-sm">{{ $job->title }}</h3>

                    @if($job->salary_range)
                        <p class="font-code-md text-code-md text-primary-fixed-dim mb-sm">{{ $job->salary_range }}</p>
                    @endif

                    <p class="font-body-sm text-body-sm text-on-surface-variant/80 mb-md line-clamp-2 flex-1">{{ $job->description }}</p>

                    <div class="flex flex-wrap gap-xs mb-md">
                        @if($job->stack)
                            @foreach(array_slice($job->stack, 0, 4) as $tech)
                                <span class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full">{{ $tech }}</span>
                            @endforeach
                            @if(count($job->stack) > 4)
                                <span class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full">+{{ count($job->stack) - 4 }}</span>
                            @endif
                        @endif
                    </div>

                    <div class="flex items-center justify-between pt-md border-t border-outline-variant/10 mt-auto">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $job->created_at->diffForHumans() }}</span>
                        <div class="flex items-center gap-xs">
                            <a href="{{ route('admin.jobs.show', $job) }}" class="p-xs rounded hover:bg-surface-container transition-colors text-on-surface-variant hover:text-primary-fixed" title="Ver">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </a>
                            <a href="{{ route('admin.jobs.edit', $job) }}" class="p-xs rounded hover:bg-surface-container transition-colors text-on-surface-variant hover:text-primary-fixed" title="Editar">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </a>
                            <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar esta oferta de empleo?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-xs rounded hover:bg-error-container/20 transition-colors text-on-surface-variant hover:text-error" title="Eliminar">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-xl">
                <span class="material-symbols-outlined text-on-surface-variant/30 text-[64px]">work_off</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-md mb-lg">No hay ofertas de empleo registradas</p>
                <a href="{{ route('admin.jobs.create') }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors inline-flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Crear primera oferta
                </a>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    @if($jobs->hasPages())
        <div class="flex justify-center">
            {{ $jobs->links() }}
        </div>
    @endif
</div>
@endsection
