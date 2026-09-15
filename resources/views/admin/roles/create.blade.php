@extends('admin.layout')

@section('title', 'Nuevo Rol')
@section('header', 'Crear Nuevo Rol')

@section('actions')
<a href="{{ route('admin.roles.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-xl">
        @csrf

        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">admin_panel_settings</span>
                    Información del Rol
                </h2>
            </div>
            <div class="p-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="name">Nombre del Rol *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           placeholder="Ej: editor" required>
                    @error('name')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">lock</span>
                    Permisos
                </h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Selecciona los permisos para este rol</p>
            </div>
            <div class="p-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-sm">
                    @foreach($permissions as $permission)
                        <label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-sm rounded transition-colors">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                   class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed"
                                   {{ in_array($permission->id, old('permissions', [])) ? 'checked' : '' }}>
                            <span class="font-body-sm text-body-sm text-on-surface">{{ $permission->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('permissions')
                    <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-end gap-md">
            <a href="{{ route('admin.roles.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-lg py-sm rounded hover:bg-surface-container transition-colors active:scale-95">
                Cancelar
            </a>
            <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-lg py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Crear Rol
            </button>
        </div>
    </form>
</div>
@endsection
