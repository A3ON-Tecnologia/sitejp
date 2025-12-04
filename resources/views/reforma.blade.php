<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reforma Tributária - Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-page-bg dark:bg-zinc-950 text-page-text min-h-screen">
    <header class="bg-brand-blue text-brand-orange p-4 w-full fixed top-0 left-0 shadow-lg z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </a>
            </div>

            <!-- Center Button -->
            <div>
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <button class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        VOLTAR PARA HOME
                    </button>
                </a>
            </div>

            <!-- Login and Register Buttons -->
            <div class="flex space-x-4">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="text-white font-bold hover:underline transition-colors cursor-pointer">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-white font-bold hover:underline transition-colors cursor-pointer">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-white font-bold hover:underline transition-colors cursor-pointer">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-24 px-6">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center mb-8">Reforma Tributária</h1>
            <p class="text-center text-zinc-600 dark:text-zinc-400">Conteúdo em breve...</p>
        </div>
    </main>
</body>

</html>