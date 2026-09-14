@extends('admin.layout')

@section('title', 'Nueva Oferta de Empleo')
@section('header', 'Nueva Oferta de Empleo')

@section('actions')
<a href="{{ route('admin.jobs.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-md py-sm rounded hover:bg-surface-container transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
    Volver
</a>
@endsection

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.jobs.store') }}" method="POST" class="space-y-xl">
        @csrf

        {{-- Basic Info --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">info</span>
                    Información Básica
                </h2>
            </div>
            <div class="p-lg space-y-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="title">Título del Puesto *</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           placeholder="Ej: Senior Frontend Engineer" required>
                    @error('title')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="company">Empresa *</label>
                        <input type="text" name="company" id="company" value="{{ old('company') }}"
                               class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                               placeholder="Ej: Vercel" required>
                        @error('company')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="location">Ubicación *</label>
                        <input type="text" name="location" id="location" value="{{ old('location') }}"
                               class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                               placeholder="Ej: Remote, US" required>
                        @error('location')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="work_mode">Modalidad de Trabajo *</label>
                        <select name="work_mode" id="work_mode"
                                class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all">
                            <option value="remote" {{ old('work_mode') === 'remote' ? 'selected' : '' }}>Remoto</option>
                            <option value="onsite" {{ old('work_mode') === 'onsite' ? 'selected' : '' }}>Presencial</option>
                            <option value="hybrid" {{ old('work_mode') === 'hybrid' ? 'selected' : '' }}>Híbrido</option>
                        </select>
                        @error('work_mode')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="status">Estado *</label>
                        <select name="status" id="status"
                                class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all">
                            <option value="pending" {{ old('status', 'pending') === 'pending' ? 'selected' : '' }}>Pendiente</option>
                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Activo</option>
                            <option value="closed" {{ old('status') === 'closed' ? 'selected' : '' }}>Cerrado</option>
                        </select>
                        @error('status')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Salary --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">paid</span>
                    Salario (USD)
                </h2>
            </div>
            <div class="p-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="salary_min">Mínimo</label>
                        <input type="number" name="salary_min" id="salary_min" value="{{ old('salary_min') }}"
                               class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-code-md text-code-md text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                               placeholder="Ej: 80000" min="0">
                        @error('salary_min')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="salary_max">Máximo</label>
                        <input type="number" name="salary_max" id="salary_max" value="{{ old('salary_max') }}"
                               class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-code-md text-code-md text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                               placeholder="Ej: 120000" min="0">
                        @error('salary_max')
                            <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">description</span>
                    Descripción
                </h2>
            </div>
            <div class="p-lg">
                <textarea name="description" id="description" rows="6"
                          class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all resize-none"
                          placeholder="Describe las responsabilidades, requisitos y beneficios del puesto..." required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Tech Stack --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">code</span>
                    Tech Stack
                </h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Separa cada tecnología con una coma</p>
            </div>
            <div class="p-lg">
                <input type="text" name="stack_input" id="stack_input" value="{{ old('stack_input') }}"
                       class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                       placeholder="Ej: React, Next.js, TypeScript, Tailwind CSS">
                <input type="hidden" name="stack" id="stack_hidden" value="{{ old('stack') ? implode(',', old('stack')) : '' }}">
                <div id="stack_tags" class="flex flex-wrap gap-xs mt-sm">
                    @if(old('stack'))
                        @foreach(old('stack') as $tag)
                            <span class="inline-flex items-center gap-xs bg-primary-fixed/10 border border-primary-fixed/30 text-primary-fixed font-label-caps text-label-caps px-sm py-xs rounded-full">
                                {{ $tag }}
                                <button type="button" onclick="removeTag(this)" class="hover:text-error transition-colors">&times;</button>
                            </span>
                        @endforeach
                    @endif
                </div>
                @error('stack')
                    <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Contact --}}
        <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
            <div class="p-lg border-b border-outline-variant/20">
                <h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">mail</span>
                    Contacto
                </h2>
            </div>
            <div class="p-lg">
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="contact_email">Email de Contacto</label>
                    <input type="email" name="contact_email" id="contact_email" value="{{ old('contact_email') }}"
                           class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface placeholder-on-surface-variant/50 focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all"
                           placeholder="hr@company.com">
                    @error('contact_email')
                        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex items-center justify-end gap-md">
            <a href="{{ route('admin.jobs.index') }}" class="bg-surface-container-high border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-lg py-sm rounded hover:bg-surface-container transition-colors active:scale-95">
                Cancelar
            </a>
            <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-lg py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Crear Oferta
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    const stackInput = document.getElementById('stack_input');
    const stackHidden = document.getElementById('stack_hidden');
    const stackTags = document.getElementById('stack_tags');
    let tags = stackHidden.value ? stackHidden.value.split(',') : [];

    function updateHidden() {
        stackHidden.value = tags.filter(t => t.trim()).join(',');
    }

    function renderTags() {
        stackTags.innerHTML = tags.map((tag, i) => `
            <span class="inline-flex items-center gap-xs bg-primary-fixed/10 border border-primary-fixed/30 text-primary-fixed font-label-caps text-label-caps px-sm py-xs rounded-full">
                ${tag}
                <button type="button" onclick="removeTag(${i})" class="hover:text-error transition-colors">&times;</button>
            </span>
        `).join('');
    }

    function removeTag(index) {
        tags.splice(index, 1);
        updateHidden();
        renderTags();
    }

    stackInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            const value = this.value.replace(',', '').trim();
            if (value && !tags.includes(value)) {
                tags.push(value);
                updateHidden();
                renderTags();
            }
            this.value = '';
        }
    });
</script>
@endpush
@endsection
