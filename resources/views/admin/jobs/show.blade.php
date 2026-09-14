@extends('admin.layout')

@section('title', 'Detalle de Empleo')
@section('header', 'Detalle de Empleo')

@section('actions')
<a href="{{ route('admin.jobs.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-3xl">
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        {{-- Header --}}
        <div class="p-xl border-b border-outline-variant/20 bg-surface-container/30">
            <div class="flex items-start justify-between">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">{{ $job->title }}</h2>
                    <div class="flex items-center gap-md">
                        <span class="font-body-sm text-body-sm text-secondary-fixed">{{ $job->company }}</span>
                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[16px]">location_on</span>
                            {{ $job->location }}
                        </span>
                    </div>
                </div>
                @if($job->status === 'active')
                    <span class="font-label-caps text-label-caps bg-primary-fixed/10 text-primary-fixed px-md py-sm rounded-full">Activo</span>
                @elseif($job->status === 'pending')
                    <span class="font-label-caps text-label-caps bg-amber-500/10 text-amber-400 px-md py-sm rounded-full">Pendiente</span>
                @else
                    <span class="font-label-caps text-label-caps bg-error-container/10 text-error px-md py-sm rounded-full">Rechazado</span>
                @endif
            </div>
        </div>

        {{-- Details --}}
        <div class="p-xl space-y-xl">
            <div class="grid grid-cols-2 gap-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">ID</label>
                    <p class="font-code-md text-code-md text-on-surface">#{{ $job->id }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Salario</label>
                    <p class="font-code-md text-code-md text-primary-fixed-dim">{{ $job->salary }}</p>
                </div>
            </div>

            <div>
                <label class="block font-label-caps text-label-caps text-on-surface-variant mb-sm">Descripción</label>
                <p class="font-body-sm text-body-sm text-on-surface leading-relaxed">{{ $job->description }}</p>
            </div>

            <div>
                <label class="block font-label-caps text-label-caps text-on-surface-variant mb-sm">Tech Stack</label>
                <div class="flex flex-wrap gap-sm">
                    @foreach($job->stack as $tech)
                        <span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-md py-sm rounded-full">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Status Actions --}}
            <div class="flex items-center gap-md pt-lg border-t border-outline-variant/20">
                @if($job->status === 'pending')
                    <form action="{{ route('admin.jobs.update.status', $job->id) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="active">
                        <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">check</span>
                            Aprobar
                        </button>
                    </form>
                    <form action="{{ route('admin.jobs.update.status', $job->id) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="rejected">
                        <button type="submit" class="bg-error-container/20 border border-error-container/50 text-error font-label-caps text-label-caps px-md py-sm rounded hover:bg-error-container/30 transition-colors active:scale-95 flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                            Rechazar
                        </button>
                    </form>
                @endif

                <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="inline ml-auto" onsubmit="return confirm('¿Estás seguro de eliminar este empleo?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-error-container/20 hover:border-error-container/50 hover:text-error transition-colors active:scale-95 flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">delete</span>
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
