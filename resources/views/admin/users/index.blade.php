@extends('admin.layout')

@section('title', 'Usuarios')
@section('header', 'Gestión de Usuarios')

@section('actions')
<a href="#" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">person_add</span>
    Nuevo Usuario
</a>
@endsection

@section('content')
<div class="space-y-lg">
    {{-- Search Bar --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg">
        <form action="{{ route('admin.users.index') }}" method="GET" class="flex flex-col md:flex-row gap-md">
            <div class="flex-1 relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
                <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
                    <span class="material-symbols-outlined" style="font-size: 20px;">search</span>
                </div>
                <input type="text" name="search" value="{{ request('search') }}"
                       class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0"
                       placeholder="Buscar por nombre o email...">
            </div>
            <button type="submit" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95">
                Buscar
            </button>
        </form>
    </div>

    {{-- Users Table --}}
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-outline-variant/20">
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">USUARIO</th>
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">EMAIL</th>
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">REGISTRO</th>
                        <th class="text-right px-lg py-md font-label-caps text-label-caps text-on-surface-variant">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse($users as $user)
                        <tr class="hover:bg-surface-container/30 transition-colors">
                            <td class="px-lg py-md">
                                <div class="flex items-center gap-sm">
                                    <div class="w-9 h-9 rounded-full bg-primary-fixed/20 flex items-center justify-center flex-shrink-0">
                                        <span class="font-headline-md text-headline-md text-primary-fixed">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="px-lg py-md">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $user->email }}</span>
                            </td>
                            <td class="px-lg py-md">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $user->created_at->format('d/m/Y') }}</span>
                            </td>
                            <td class="px-lg py-md text-right">
                                <div class="flex items-center justify-end gap-xs">
                                    <a href="{{ route('admin.users.show', $user) }}" class="p-xs rounded hover:bg-surface-container-high transition-colors text-on-surface-variant hover:text-primary-fixed">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-xs rounded hover:bg-error-container/20 transition-colors text-on-surface-variant hover:text-error">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-lg py-xl text-center">
                                <span class="material-symbols-outlined text-on-surface-variant/30 text-[48px]">person_off</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">No se encontraron usuarios</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if($users->hasPages())
            <div class="px-lg py-md border-t border-outline-variant/20">
                {{ $users->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
