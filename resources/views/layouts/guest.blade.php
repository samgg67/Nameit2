<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-white antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center border-2 border-black items-center pt-6 sm:pt-0 bg-[#ABE4FF]">
            <div>
                <a href="/">
                    <h1 class="text-4xl font-extrabold text-center text-[#DB7580]">
                        <span class="text-purple-800 italic">N</span>
                        <span class="text-yellow-600 font-bold">a</span>
                        <span class="text-red-600 font-bold">m</span>
                        <span class="text-purple-600 font-bold">e</span>
                        <span class="text-green-700 font-bold"> I</span>
                        <span class="text-yellow-700 font-bold">T</span>
                        <span class="text-red-600 font-extrabold">!</span>
                    </h1>
                </a>
            </div>

           <div class="w-256 sm:w-2/5 mt-6 px-16 py-16 border-2 border-black bg-[#FFDAAB] shadow-md rounded-lg">


                {{ $slot }}
            </div>
        </div>
    </body>
</html>
