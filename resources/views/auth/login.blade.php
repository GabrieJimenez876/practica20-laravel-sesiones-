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
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <div class="rounded-3xl bg-white p-8 shadow-xl ring-1 ring-slate-200/70">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="space-y-5">
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-700" />
                    <x-text-input id="email" class="mt-2 block w-full rounded-2xl border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-900 focus:ring-2 focus:ring-slate-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-700" />
                    <x-text-input id="password" class="mt-2 block w-full rounded-2xl border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-900 focus:ring-2 focus:ring-slate-200"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <div class="flex items-center justify-between gap-4">
                    <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-600">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900" name="remember">
                        {{ __('Remember me') }}
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-slate-700 transition hover:text-slate-900" href="{{ route('password.request') }}">
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