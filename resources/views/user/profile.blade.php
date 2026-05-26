<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @auth
                        <h3 class="text-lg font-semibold">Información del usuario</h3>
                        <p class="mt-4"><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                        <p class="mt-2"><strong>Correo:</strong> {{ auth()->user()->email }}</p>
                        <p class="mt-2"><strong>Rol:</strong> {{ auth()->user()->role }}</p>

                        <div class="mt-6">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="rounded-md bg-red-600 px-4 py-2 text-white hover:bg-red-700">
                                    {{ __('Cerrar Sesión') }}
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
