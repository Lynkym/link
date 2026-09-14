@extends('admin.layout')

@section('title', 'Detalle de Empleo')
@section('header', $job->title)

@section('actions')
<div class="flex items-center gap-sm">
    <a href="{{ route('admin.jobs.edit', $job) }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
        <span class="material-symbols-outlined text-[18px]">edit</span>
        Editar
    </a>
    <a href="{{ route('admin.jobs.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Volver
    </a>
</div>
@endsection

@section('content')
<div class="max-w-3xl space-y-xl">
    {{-- Header Card --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        <div class="p-xl bg-surface-container/30 border-b border-outline-variant/20">
            <div class="flex items-start justify-between">
                <div>
                    <div class="flex items-center gap-sm mb-sm">
                        <div class="w-12 h-12 rounded-lg bg-surface border border-outline-variant/20 flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-surface-variant">business</span>
                        </div>
                        <div>
                            <p class="font-headline-lg text-headline-lg text-on-surface">{{ $job->title }}</p>
                            <p class="font-body-sm text-body-sm text-secondary-fixed">{{ $job->company }}</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-sm mt-md">
                        <span class="inline-flex items-center gap-xs font-body-sm text-body-sm text-on-surface-variant">
                            <span class="material-symbols-outlined text-[16px]">location_on</span>
                            {{ $job->location }}
                        </span>
                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                        <span class="inline-flex items-center gap-xs font-body-sm text-body-sm text-on-surface-variant">
                            <span class="material-symbols-outlined text-[16px]">{{ $job->work_mode === 'remote' ? 'language' : ($job->work_mode === 'hybrid' ? 'home' : 'apartment') }}</span>
                            {{ $job->work_mode_label }}
                        </span>
                        @if($job->salary_range)
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span class="font-code-md text-code-md text-primary-fixed-dim">{{ $job->salary_range }}</span>
                        @endif
                    </div>
                </div>
                @if($job->status === 'active')
                    <span class="font-label-caps text-label-caps bg-primary-fixed/10 text-primary-fixed px-md py-sm rounded-full">Activo</span>
                @elseif($job->status === 'pending')
                    <span class="font-label-caps text-label-caps bg-amber-500/10 text-amber-400 px-md py-sm rounded-full">Pendiente</span>
                @else
                    <span class="font-label-caps text-label-caps bg-error-container/10 text-error px-md py-sm rounded-full">Cerrado</span>
                @endif
            </div>
        </div>

        {{-- Details --}}
        <div class="p-xl space-y-xl">
            <div>
                <label class="block font-label-caps text-label-caps text-on-surface-variant mb-sm">Descripción</label>
                <div class="font-body-sm text-body-sm text-on-surface leading-relaxed whitespace-pre-wrap">{{ $job->description }}</div>
            </div>

            @if($job->stack && count($job->stack) > 0)
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-sm">Tech Stack</label>
                    <div class="flex flex-wrap gap-sm">
                        @foreach($job->stack as $tech)
                            <span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-md py-sm rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-2 gap-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">ID</label>
                    <p class="font-code-md text-code-md text-on-surface">#{{ $job->id }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Email de Contacto</label>
                    <p class="font-body-sm text-body-sm text-on-surface">{{ $job->contact_email ?? 'No especificado' }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Creado</label>
                    <p class="font-body-sm text-body-sm text-on-surface">{{ $job->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Última Actualización</label>
                    <p class="font-body-sm text-body-sm text-on-surface">{{ $job->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-between pt-lg border-t border-outline-variant/20">
                <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta oferta de empleo?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-error-container/20 border border-error-container/50 text-error font-label-caps text-label-caps px-md py-sm rounded hover:bg-error-container/30 transition-colors active:scale-95 flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">delete</span>
                        Eliminar
                    </button>
                </form>
                <a href="{{ route('admin.jobs.edit', $job) }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[18px]">edit</span>
                    Editar Oferta
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
