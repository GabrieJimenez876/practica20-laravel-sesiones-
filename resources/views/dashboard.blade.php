<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Estás conectado correctamente.") }}
                </div>
            </div>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold">Perfil</h3>
                    <p class="mt-2 text-sm text-gray-600">Revisa tu información personal y cierra sesión desde tu perfil.</p>
                    <a href="{{ route('user.profile') }}" class="mt-4 inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">Ver perfil</a>
                </div>

                @if(auth()->check() && auth()->user()->isAdmin())
                    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold">Panel de administrador</h3>
                        <p class="mt-2 text-sm text-gray-600">Gestiona usuarios del sistema con permisos de administrador.</p>
                        <a href="{{ route('admin.users.index') }}" class="mt-4 inline-flex items-center rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">Ir a usuarios</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
