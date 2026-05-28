<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 text-slate-900 antialiased">
        <div class="min-h-screen flex flex-col">
            <header class="border-b border-slate-200 bg-white">
                <div class="mx-auto flex items-center justify-between px-4 py-4 max-w-7xl sm:px-6 lg:px-8">
                    <a href="/" class="flex items-center gap-3">
                        <x-application-logo class="h-10 w-10 text-red-600" />
                        <span class="text-xl font-semibold tracking-tight">Laravel Sesiones</span>
                    </a>

                    <nav class="flex items-center gap-4 text-sm font-medium text-slate-700">
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-full bg-slate-900 px-4 py-2 text-white transition hover:bg-slate-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-full border border-slate-300 bg-white px-4 py-2 text-slate-900 transition hover:bg-slate-100">Iniciar sesión</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-full bg-red-600 px-4 py-2 text-white transition hover:bg-red-700">Registrarse</a>
                            @endif
                        @endauth
                    </nav>
                </div>
            </header>

            <main class="flex-1">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
                        <section class="space-y-6">
                            <span class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-700 ring-1 ring-red-200">Proyecto práctico • Sesiones y roles</span>
                            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl">Presenta tu aplicación con un diseño moderno y limpio.</h1>
                            <p class="max-w-2xl text-lg leading-8 text-slate-600">Administra usuarios, roles y sesiones con componentes responsive. Esta página está preparada para que el proyecto luzca bien en escritorio y móvil.</p>
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Ir al dashboard</a>
                                @guest
                                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Iniciar sesión</a>
                                @endguest
                            </div>
                        </section>

                        <div class="rounded-[2rem] bg-gradient-to-br from-red-100 via-white to-slate-100 p-6 shadow-xl ring-1 ring-slate-200">
                            <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200">
                                <h2 class="text-base font-semibold text-slate-900">Vista previa del estilo</h2>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Un diseño claro y ordenado que facilita la navegación por la aplicación.</p>
                                <div class="mt-8 space-y-4">
                                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                                        <h3 class="text-sm font-semibold text-slate-900">Autenticación</h3>
                                        <p class="mt-2 text-sm leading-6 text-slate-600">Login, registro y gestión de sesiones con un diseño accesible.</p>
                                    </div>
                                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                                        <h3 class="text-sm font-semibold text-slate-900">Dashboard</h3>
                                        <p class="mt-2 text-sm leading-6 text-slate-600">Panel de usuario claro con acción rápida para perfil y administración.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="mt-20 grid gap-6 md:grid-cols-3">
                        <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900">Gestión de usuarios</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-600">Crea, edita y controla los accesos de cada usuario con claridad.</p>
                        </article>

                        <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900">Roles y permisos</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-600">Separa rutas de administrador y usuario para mayor seguridad y organización.</p>
                        </article>

                        <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900">Diseño responsive</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-600">La interfaz se ajusta automáticamente a móvil, tableta y escritorio.</p>
                        </article>
                    </section>
                </div>
            </main>

            <footer class="border-t border-slate-200 bg-white">
                <div class="mx-auto max-w-7xl px-4 py-5 text-sm text-slate-500 sm:px-6 lg:px-8">Laravel Sesiones • Proyecto de práctica</div>
            </footer>
        </div>
    </body>
</html>
