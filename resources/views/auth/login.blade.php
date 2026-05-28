<x-guest-layout>
    <div class="mb-8 rounded-3xl bg-slate-950 px-6 py-8 text-center text-white shadow-2xl ring-1 ring-slate-200/10">
        <h4 class="text-xl font-semibold">Sistema de Gestión - Práctica N°20</h4>
        <p class="mt-2 text-sm text-slate-300">Jimenez Tarqui Gabriel Isaac</p>
    </div>

    @auth
        <div class="mb-6 flex justify-end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-full bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700">Cerrar sesión</button>
            </form>
        </div>
    @endauth

    <!-- Session Status -->
    <x-auth-session-status class="mb-6 rounded-3xl bg-emerald-950/90 px-4 py-4 text-sm text-emerald-200 ring-1 ring-emerald-800" :status="session('status')" />

    <div class="rounded-3xl bg-slate-900/95 p-8 shadow-2xl shadow-black/30 ring-1 ring-slate-700">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="space-y-5">
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-100" />
                    <x-text-input id="email" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-sm text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-100" />
                    <x-text-input id="password" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-sm text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-400" />
                </div>

                <div class="flex items-center justify-between gap-4">
                    <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-300">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-950/90 text-slate-100 focus:ring-slate-700" name="remember">
                        {{ __('Remember me') }}
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-slate-300 transition hover:text-slate-100" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="pt-1">
                    <x-primary-button class="w-full rounded-2xl py-3 text-sm font-semibold">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>