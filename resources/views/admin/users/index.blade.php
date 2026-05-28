<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="font-semibold text-xl text-slate-100 leading-tight">{{ __('Administración de Usuarios') }}</h2>
                <p class="mt-1 text-sm text-slate-400">Gestiona los usuarios registrados con una tabla oscura y clara.</p>
            </div>
            <a href="{{ route('admin.users.create') }}" class="inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-500">{{ __('Crear Usuario') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 rounded-3xl bg-emerald-950/90 px-4 py-4 text-slate-100 ring-1 ring-emerald-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-3xl border border-slate-800 bg-slate-900/95 shadow-xl shadow-black/20 ring-1 ring-slate-800">
                <div class="p-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-800">
                        <thead class="bg-slate-950 text-slate-400">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Rol</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800 bg-slate-950 text-slate-100">
                            @foreach($users as $user)
                                <tr class="hover:bg-slate-900/80">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $user->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">{{ $user->role }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-4">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-400 hover:text-blue-300">Editar</a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-flex" onsubmit="return confirm('¿Eliminar este usuario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-300">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
