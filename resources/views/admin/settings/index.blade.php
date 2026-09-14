@extends('admin.layout')

@section('title', 'Configuración')
@section('header', 'Configuración del Sistema')

@section('content')
<div class="max-w-2xl space-y-xl">
    {{-- General Settings --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        <div class="p-lg border-b border-outline-variant/20">
            <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                <span class="material-symbols-outlined text-primary-fixed">settings</span>
                General
            </h2>
        </div>
        <div class="p-lg">
            <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-lg">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="site_name">Nombre del Sitio</label>
                    <input type="text" name="site_name" id="site_name" value="{{ old('site_name', 'Linkjobs') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           required>
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="site_description">Descripción</label>
                    <textarea name="site_description" id="site_description" rows="3"
                              class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all resize-none"
                              placeholder="Descripción del sitio web">{{ old('site_description', 'The premier job board for software engineers.') }}</textarea>
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="admin_email">Email de Administración</label>
                    <input type="email" name="admin_email" id="admin_email" value="{{ old('admin_email', 'admin@linkjobs.com') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           required>
                </div>

                <div class="flex justify-end pt-md border-t border-outline-variant/20">
                    <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-lg py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Danger Zone --}}
    <div class="bg-surface-container-high border border-error-container/30 rounded-lg overflow-hidden">
        <div class="p-lg border-b border-error-container/20">
            <h2 class="font-headline-md text-headline-md text-error flex items-center gap-sm">
                <span class="material-symbols-outlined">warning</span>
                Zona de Peligro
            </h2>
        </div>
        <div class="p-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-body-sm text-body-sm text-on-surface">Limpiar caché del sistema</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Esto no afectará los datos del sitio.</p>
                </div>
                <button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95">
                    Limpiar Caché
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
