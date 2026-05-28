<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased bg-slate-50">
        <div class="min-h-screen flex flex-col sm:justify-center items-center px-4 py-10 sm:px-6 lg:px-8">
            <div class="w-full sm:max-w-md">
                <div class="flex justify-center mb-6">
                    <x-application-logo class="w-20 h-20 text-red-600" />
                </div>
                <div class="rounded-3xl bg-white px-6 py-8 shadow-xl ring-1 ring-slate-200 sm:px-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
