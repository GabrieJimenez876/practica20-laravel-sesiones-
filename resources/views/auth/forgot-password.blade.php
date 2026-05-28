<x-guest-layout>
    <div class="space-y-6">
        <div class="text-center">
            <h1 class="text-2xl font-semibold text-slate-100">Recuperar contraseña</h1>
            <p class="mt-2 text-sm text-slate-400">Escribe tu email para recibir el enlace de recuperación.</p>
        </div>

        <x-auth-session-status class="rounded-2xl bg-emerald-950/80 p-4 text-sm text-emerald-200" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-100" />
                <x-text-input id="email" class="mt-2 block w-full rounded-2xl border-slate-700 bg-slate-950/90 px-4 py-3 text-slate-100 shadow-sm focus:border-slate-500 focus:ring-2 focus:ring-slate-700" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
            </div>

            <div class="flex justify-end">
                <x-primary-button class="w-full rounded-2xl py-3 text-sm font-semibold sm:w-auto">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
