@extends('admin.layout')

@section('title', 'Detalle de Usuario')
@section('header', 'Detalle de Usuario')

@section('actions')
<a href="{{ route('admin.users.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-2xl">
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        {{-- Header --}}
        <div class="p-xl border-b border-outline-variant/20 bg-surface-container/30">
            <div class="flex items-center gap-lg">
                <div class="w-16 h-16 rounded-full bg-primary-fixed/20 flex items-center justify-center">
                    <span class="font-headline-lg text-headline-lg text-primary-fixed">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                </div>
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ $user->name }}</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $user->email }}</p>
                </div>
            </div>
        </div>

        {{-- Details --}}
        <div class="p-xl space-y-lg">
            <div class="grid grid-cols-2 gap-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">ID</label>
                    <p class="font-code-md text-code-md text-on-surface">#{{ $user->id }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Registro</label>
                    <p class="font-body-sm text-body-sm text-on-surface">{{ $user->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Última Actualización</label>
                    <p class="font-body-sm text-body-sm text-on-surface">{{ $user->updated_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs">Verificado</label>
                    @if($user->email_verified_at)
                        <span class="inline-flex items-center gap-xs text-primary-fixed">
                            <span class="material-symbols-outlined text-[18px]">check_circle</span>
                            <span class="font-body-sm text-body-sm">Sí</span>
                        </span>
                    @else
                        <span class="inline-flex items-center gap-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">cancel</span>
                            <span class="font-body-sm text-body-sm">No</span>
                        </span>
                    @endif
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-md pt-lg border-t border-outline-variant/20">
                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este usuario? Esta acción no se puede deshacer.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-error-container/20 border border-error-container/50 text-error font-label-caps text-label-caps px-md py-sm rounded hover:bg-error-container/30 transition-colors active:scale-95 flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">delete</span>
                        Eliminar Usuario
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
