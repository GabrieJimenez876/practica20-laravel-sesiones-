<x-guest-layout>
    <div class="space-y-6">
        <div class="text-center">
            <h1 class="text-2xl font-semibold text-slate-100">Crear cuenta</h1>
            <p class="mt-2 text-sm text-slate-400">Registra un nuevo usuario para acceder al sistema.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" class="text-sm font-medium text-slate-100" />
                <x-text-input id="name" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-400" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-100" />
                <x-text-input id="email" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
            </div>

            <div>
                <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-100" />
                <x-text-input id="password" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-400" />
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-slate-100" />
                <x-text-input id="password_confirmation" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-400" />
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a class="text-sm font-medium text-slate-400 transition hover:text-slate-100" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="w-full rounded-2xl py-3 text-sm font-semibold sm:w-auto">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
