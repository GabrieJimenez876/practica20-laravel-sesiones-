<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Dashboard</h2>
                <p class="mt-1 text-sm text-slate-600">Bienvenido de nuevo, {{ Auth::user()->name }}. Aquí puedes administrar tu cuenta y acceder a las secciones clave.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-800">Editar perfil</a>
                @if(auth()->check() && auth()->user()->isAdmin())
                    <a href="{{ route('admin.users.index') }}" class="inline-flex items-center rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Usuarios</a>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 xl:grid-cols-3">
                <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <h3 class="text-lg font-semibold text-slate-900">Estado de la sesión</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Tu sesión está activa y la aplicación está lista para su uso.</p>
                    <div class="mt-6 inline-flex items-center gap-2 rounded-full bg-slate-100 px-4 py-2 text-sm font-medium text-slate-800">Conectado como {{ Auth::user()->email }}</div>
                </div>
                <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <h3 class="text-lg font-semibold text-slate-900">Perfil</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Revisa y actualiza tus datos personales desde la página de perfil.</p>
                    <a href="{{ route('profile.edit') }}" class="mt-5 inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-800">Ver perfil</a>
                </div>
                @if(auth()->check() && auth()->user()->isAdmin())
                    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                        <h3 class="text-lg font-semibold text-slate-900">Panel de administrador</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">Accede a las funciones administrativas y gestiona los usuarios del sistema.</p>
                        <a href="{{ route('admin.users.index') }}" class="mt-5 inline-flex items-center rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Ir a usuarios</a>
                    </div>
                @endif
            </div>

            <div class="mt-8 rounded-3xl bg-slate-50 p-6 shadow-sm ring-1 ring-slate-200">
                <h3 class="text-lg font-semibold text-slate-900">Accesos rápidos</h3>
                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
                        <p class="text-sm font-semibold text-slate-900">Perfil seguro</p>
                        <p class="mt-2 text-sm text-slate-600">Cambia tu nombre, correo y contraseña cuando lo necesites.</p>
                    </div>
                    <div class="rounded-3xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
                        <p class="text-sm font-semibold text-slate-900">Sesiones</p>
                        <p class="mt-2 text-sm text-slate-600">Controla tu acceso y las opciones de inicio de sesión.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
