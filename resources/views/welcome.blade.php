<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center pt-8 sm:pt-0">
                    <h1 class="text-3xl text-gray-600 font-semibold">Coming Soon</h1>

                    <p class="text-xl mt-4 max-w-2xl text-gray-600">
                        I'm working on some updates to the demo site for Laravel Form Components. Please check back soon.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
