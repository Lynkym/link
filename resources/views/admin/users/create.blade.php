@extends('admin.layout')

@section('title', 'Nuevo Usuario')
@section('header', 'Crear Usuario')

@section('actions')
<a href="{{ route('admin.users.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-xl">
        @csrf

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
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           autocomplete="name" required>
                    @error('name')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="email">Email *</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           autocomplete="email" required>
                    @error('email')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                @include('admin.users._role-select', ['selected' => old('role', 'developer')])
            </div>
        </div>

        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">key</span>
                    Contraseña
                </h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Se usará para que el usuario acceda por primera vez.</p>
            </div>
            <div class="p-lg space-y-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="password">Contraseña *</label>
                    <input type="password" name="password" id="password" autocomplete="new-password"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           placeholder="Mínimo 8 caracteres" required>
                    @error('password')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="password_confirmation">Confirmar contraseña *</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           placeholder="Repetí la contraseña" required>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-md">
            <a href="{{ route('admin.users.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-lg py-sm rounded hover:bg-surface-container transition-colors active:scale-95">
                Cancelar
            </a>
            <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-lg py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">person_add</span>
                Crear Usuario
            </button>
        </div>
    </form>
</div>
@endsection
