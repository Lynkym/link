@extends('admin.layout')

@section('title', 'Empleos')
@section('header', 'Gestión de Empleos')

@section('actions')
<a href="#" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">add</span>
    Nuevo Empleo
</a>
@endsection

@section('content')
<div class="space-y-lg">
    {{-- Filters --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg">
        <div class="flex flex-wrap gap-sm">
            <button class="bg-primary-fixed/10 border border-primary-fixed/30 text-primary-fixed font-label-caps text-label-caps px-md py-sm rounded-full transition-colors">
                Todos
            </button>
            <button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded-full hover:border-primary-fixed/50 transition-colors">
                Activos
            </button>
            <button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded-full hover:border-primary-fixed/50 transition-colors">
                Pendientes
            </button>
            <button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded-full hover:border-primary-fixed/50 transition-colors">
                Rechazados
            </button>
        </div>
    </div>

    {{-- Jobs Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        @forelse($jobs as $job)
            <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden hover:border-primary-fixed/30 transition-all group">
                <div class="p-lg">
                    <div class="flex items-start justify-between mb-md">
                        <div class="flex items-center gap-sm">
                            <div class="w-12 h-12 rounded-lg bg-surface border border-outline-variant/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-surface-variant">business</span>
                            </div>
                            <div>
                                <p class="font-body-sm text-body-sm text-on-surface font-medium">{{ $job->company }}</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $job->location }}</p>
                            </div>
                        </div>
                        @if($job->status === 'active')
                            <span class="font-label-caps text-label-caps bg-primary-fixed/10 text-primary-fixed px-sm py-xs rounded-full">Activo</span>
                        @elseif($job->status === 'pending')
                            <span class="font-label-caps text-label-caps bg-amber-500/10 text-amber-400 px-sm py-xs rounded-full">Pendiente</span>
                        @else
                            <span class="font-label-caps text-label-caps bg-error-container/10 text-error px-sm py-xs rounded-full">Rechazado</span>
                        @endif
                    </div>

                    <h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary-fixed transition-colors mb-sm">{{ $job->title }}</h3>
                    <p class="font-code-md text-code-md text-primary-fixed-dim mb-md">{{ $job->salary }}</p>

                    <div class="flex flex-wrap gap-xs mb-md">
                        @foreach($job->stack as $tech)
                            <span class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between pt-md border-t border-outline-variant/10">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $job->created_at->diffForHumans() }}</span>
                        <div class="flex items-center gap-xs">
                            <a href="{{ route('admin.jobs.show', $job->id) }}" class="p-xs rounded hover:bg-surface-container transition-colors text-on-surface-variant hover:text-primary-fixed">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </a>
                            <button class="p-xs rounded hover:bg-surface-container transition-colors text-on-surface-variant hover:text-primary-fixed">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-xl">
                <span class="material-symbols-outlined text-on-surface-variant/30 text-[64px]">work_off</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-md">No hay empleos registrados</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
