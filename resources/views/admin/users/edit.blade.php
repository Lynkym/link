@extends('admin.layout')

@section('title', 'Editar Usuario')
@section('header', 'Editar: ' . $user->name)

@section('actions')
<a href="{{ route('admin.users.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-xl">
        @csrf
        @method('PUT')

        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">person</span>
                    Información del Usuario
                </h2>
            </div>
            <div class="p-lg space-y-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="name">Nombre *</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           required>
                    @error('name')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="email">Email *</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           required>
                    @error('email')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="role">Rol *</label>
                    <select name="role" id="role"
                            class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all">
                        <option value="developer" {{ old('role', $user->role) === 'developer' ? 'selected' : '' }}>Desarrollador</option>
                        <option value="recruiter" {{ old('role', $user->role) === 'recruiter' ? 'selected' : '' }}>Reclutador</option>
                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                    @error('role')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-md">
            <a href="{{ route('admin.users.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-lg py-sm rounded hover:bg-surface-container transition-colors active:scale-95">
                Cancelar
            </a>
            <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-lg py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Guardar Cambios
            </button>
        </div>
    </form>
</div>
@endsection
