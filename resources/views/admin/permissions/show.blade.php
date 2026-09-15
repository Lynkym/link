@extends('admin.layout')

@section('title', 'Detalle de Permiso')
@section('header', $permission->name)

@section('actions')
<div class="flex items-center gap-sm">
    <a href="{{ route('admin.permissions.edit', $permission) }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
        <span class="material-symbols-outlined text-[18px]">edit</span>
        Editar
    </a>
    <a href="{{ route('admin.permissions.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Volver
    </a>
</div>
@endsection

@section('content')
<div class="max-w-2xl space-y-xl">
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        <div class="p-xl bg-surface-container/30 border-b border-outline-variant/20">
            <div class="flex items-center gap-md">
                <div class="w-14 h-14 rounded-xl bg-primary-fixed/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary-fixed text-[28px]">lock</span>
                </div>
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ $permission->name }}</h2>
                    <p class="font-code-md text-code-md text-on-surface-variant">Guard: {{ $permission->guard_name }}</p>
                </div>
            </div>
        </div>

        <div class="p-xl">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-md">Roles Asignados</h3>
            @if($permission->roles->count() > 0)
                <div class="flex flex-wrap gap-sm">
                    @foreach($permission->roles as $role)
                        <span class="bg-secondary-fixed/10 border border-secondary-fixed/30 text-secondary-fixed font-label-caps text-label-caps px-md py-sm rounded-full">{{ $role->name }}</span>
                    @endforeach
                </div>
            @else
                <p class="font-body-sm text-body-sm text-on-surface-variant/50">Este permiso no está asignado a ningún rol</p>
            @endif
        </div>

        <div class="p-xl border-t border-outline-variant/20 flex items-center justify-between">
            <span class="font-body-sm text-body-sm text-on-surface-variant">ID: #{{ $permission->id }}</span>
            <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" onsubmit="return confirm('¿Eliminar este permiso?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-error-container/20 border border-error-container/50 text-error font-label-caps text-label-caps px-md py-sm rounded hover:bg-error-container/30 transition-colors active:scale-95 flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[18px]">delete</span>
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
