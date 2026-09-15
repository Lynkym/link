@extends('admin.layout')

@section('title', 'Roles')
@section('header', 'Gestión de Roles')

@section('actions')
<a href="{{ route('admin.roles.create') }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed/90 transition-colors active:scale-95 flex items-center gap-xs">
    <span class="material-symbols-outlined text-[18px]">add</span>
    Nuevo Rol
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
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">PERMISOS</th>
                        <th class="text-left px-lg py-md font-label-caps text-label-caps text-on-surface-variant">USUARIOS</th>
                        <th class="text-right px-lg py-md font-label-caps text-label-caps text-on-surface-variant">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse($roles as $role)
                        <tr class="hover:bg-surface-container/30 transition-colors">
                            <td class="px-lg py-md">
                                <span class="font-body-sm text-body-sm text-on-surface font-medium">{{ $role->name }}</span>
                            </td>
                            <td class="px-lg py-md">
                                <div class="flex flex-wrap gap-xs">
                                    @forelse($role->permissions as $permission)
                                        <span class="font-label-caps text-label-caps bg-primary-fixed/10 text-primary-fixed px-sm py-xs rounded-full">{{ $permission->name }}</span>
                                    @empty
                                        <span class="font-body-sm text-body-sm text-on-surface-variant/50">Sin permisos</span>
                                    @endforelse
                                </div>
                            </td>
                            <td class="px-lg py-md">
                                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $role->users_count ?? $role->users->count() }}</span>
                            </td>
                            <td class="px-lg py-md text-right">
                                <div class="flex items-center justify-end gap-xs">
                                    <a href="{{ route('admin.roles.show', $role) }}" class="p-xs rounded hover:bg-surface-container-high transition-colors text-on-surface-variant hover:text-primary-fixed" title="Ver">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    </a>
                                    <a href="{{ route('admin.roles.edit', $role) }}" class="p-xs rounded hover:bg-surface-container-high transition-colors text-on-surface-variant hover:text-primary-fixed" title="Editar">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar este rol?')">
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
                                <span class="material-symbols-outlined text-on-surface-variant/30 text-[48px]">admin_panel_settings</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-sm">No hay roles creados</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
