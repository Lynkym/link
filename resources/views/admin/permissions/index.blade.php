@extends('admin.layout')

@section('title', 'Permisos')
@section('header', 'Gestión de Permisos')

@section('actions')
<a href="{{ route('admin.permissions.create') }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">add</span>
    Nuevo Permiso
</a>
@endsection

@section('content')
<div class="space-y-lg">
    <div class="bg-surface-container-high border border-outline-variant/20 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-outline-variant/20">
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">NOMBRE</th>
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">GUARD</th>
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">ROLES</th>
                        <th class="text-right px-lg py-md font-label-caps text-label-caps text-on-surface-variant">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse($permissions as $permission)
                        <tr class="hover:bg-surface-container/30 transition-colors">
                            <td class="px-lg py-md">
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">{{ $permission->name }}</span>
                            </td>
                            <td class="px-lg py-md">
                                <span class="font-code-md text-code-md text-on-surface-variant">{{ $permission->guard_name }}</span>
                            </td>
                            <td class="px-lg py-md">
                                <div class="flex flex-wrap gap-xs">
                                    @forelse($permission->roles as $role)
                                        <span class="font-label-caps text-label-caps bg-secondary-fixed/10 text-secondary-fixed px-sm py-xs rounded-full">{{ $role->name }}</span>
                                    @empty
                                        <span class="font-body-sm text-body-sm text-on-surface-variant/50">Sin roles</span>
                                    @endforelse
                                </div>
                            </td>
                            <td class="px-lg py-md text-right">
                                <div class="flex items-center justify-end gap-xs">
                                    <a href="{{ route('admin.permissions.show', $permission) }}" class="p-xs rounded hover:bg-surface-container-high transition-colors text-on-surface-variant hover:text-primary-fixed" title="Ver">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </a>
                                    <a href="{{ route('admin.permissions.edit', $permission) }}" class="p-xs rounded hover:bg-surface-container-high transition-colors text-on-surface-variant hover:text-primary-fixed" title="Editar">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar este permiso?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-xs rounded hover:bg-error-container/20 transition-colors text-on-surface-variant hover:text-error" title="Eliminar">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-lg py-xl text-center">
                                <span class="material-symbols-outlined text-on-surface-variant/30 text-[48px]">lock_open</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">No hay permisos creados</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
