<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/main.css', 'resources/js/app.js'])
    </head>


    <body class="font-sans antialiased h-full"
            x-data="{ darkMode: false }"
            x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    localStorage.setItem('darkMode', JSON.stringify(true));}
                    darkMode = JSON.parse(localStorage.getItem('darkMode'));
                    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

        <div x-bind:class="{'dark' : darkMode === true}"
            class="min-h-screen bg-gray-100 dark:bg-gray-900">

            @include('layouts.navigation')

                <!-- Page Heading aiMeta NEW-->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}

                            {{-- check if there is a notif.success flash session --}}
                            @if (Session::has('notif.success'))
                            <div class="bg-blue-300 mt-2 p-4">
                                {{-- if it's there then print the notification --}}
                                <span class="text-white">{{ Session::get('notif.success') }}</span>
                            </div>
                            @endif
                        </div>
                    </header>
                @endif

            <!-- Page Heading - OLD
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main class="bg-gray-100 dark:bg-gray-800">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
