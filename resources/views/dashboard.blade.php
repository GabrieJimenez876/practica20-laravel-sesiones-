<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-semibold text-slate-100">Dashboard</h2>
                <p class="mt-1 text-sm text-slate-400">Bienvenido de nuevo, {{ Auth::user()->name }}. Aquí puedes administrar tu cuenta y acceder a las secciones clave.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center rounded-full bg-slate-800 px-4 py-2 text-sm font-semibold text-slate-100 transition hover:bg-slate-700">Editar perfil</a>
                @if(auth()->check() && auth()->user()->isAdmin())
                    <a href="{{ route('admin.users.index') }}" class="inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-500">Usuarios</a>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 xl:grid-cols-3">
                <div class="rounded-3xl bg-slate-900/95 p-6 shadow-xl shadow-black/20 ring-1 ring-slate-800">
                    <h3 class="text-lg font-semibold text-slate-100">Estado de la sesión</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400">Tu sesión está activa y la aplicación está lista para su uso.</p>
                    <div class="mt-6 inline-flex items-center gap-2 rounded-full bg-slate-800 px-4 py-2 text-sm font-medium text-slate-100">Conectado como {{ Auth::user()->email }}</div>
                </div>
                <div class="rounded-3xl bg-slate-900/95 p-6 shadow-xl shadow-black/20 ring-1 ring-slate-800">
                    <h3 class="text-lg font-semibold text-slate-100">Perfil</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400">Revisa y actualiza tus datos personales desde la página de perfil.</p>
                    <a href="{{ route('profile.edit') }}" class="mt-5 inline-flex items-center rounded-full bg-slate-800 px-4 py-2 text-sm font-semibold text-slate-100 transition hover:bg-slate-700">Ver perfil</a>
                </div>
                @if(auth()->check() && auth()->user()->isAdmin())
                    <div class="rounded-3xl bg-slate-900/95 p-6 shadow-xl shadow-black/20 ring-1 ring-slate-800">
                        <h3 class="text-lg font-semibold text-slate-100">Panel de administrador</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-400">Accede a las funciones administrativas y gestiona los usuarios del sistema.</p>
                        <a href="{{ route('admin.users.index') }}" class="mt-5 inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-500">Ir a usuarios</a>
                    </div>
                @endif
            </div>

            <div class="mt-8 rounded-3xl bg-slate-900/90 p-6 shadow-xl shadow-black/20 ring-1 ring-slate-800">
                <h3 class="text-lg font-semibold text-slate-100">Accesos rápidos</h3>
                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-slate-950 p-5 shadow-sm ring-1 ring-slate-800">
                        <p class="text-sm font-semibold text-slate-100">Perfil seguro</p>
                        <p class="mt-2 text-sm text-slate-400">Cambia tu nombre, correo y contraseña cuando lo necesites.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950 p-5 shadow-sm ring-1 ring-slate-800">
                        <p class="text-sm font-semibold text-slate-100">Sesiones</p>
                        <p class="mt-2 text-sm text-slate-400">Controla tu acceso y las opciones de inicio de sesión.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
