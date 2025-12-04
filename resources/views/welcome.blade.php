<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-page-bg dark:bg-zinc-950 text-page-text min-h-screen">
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
                <a href="{{ url('/reforma') }}" class="cursor-pointer">
                    <button class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        REFORMA TRIBUTÁRIA
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

    <!-- Hero Image Section -->
    <section class="w-full mt-20 relative">
        <div class="w-full h-auto">
            <img src="{{ asset('images/home1.jpg') }}" alt="Hero Banner" class="w-full h-auto object-cover">
        </div>
        <!-- Overlay Logo -->
        <div class="absolute inset-0 flex items-start justify-center pt-4">
            <img src="{{ asset('images/logo-2.png') }}" alt="Logo Overlay" class="max-w-2xl w-full px-6">
        </div>
    </section>

    <!-- Maintenance Section -->
    <section class="py-16 px-6 bg-gradient-to-b from-page-bg to-zinc-50 dark:from-zinc-950 dark:to-zinc-900">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center space-y-6">
                <!-- Icon -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/manutencao.png') }}" alt="Manutenção" class="w-20 h-auto">
                </div>

                <!-- Title -->
                <h1 class="text-5xl md:text-6xl font-bold text-brand-blue">
                    Site em Manutenção
                </h1>

                <!-- Divider -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="h-1 w-20 bg-brand-orange rounded-full"></div>
                    <div class="h-2 w-2 bg-brand-orange rounded-full"></div>
                    <div class="h-1 w-20 bg-brand-orange rounded-full"></div>
                </div>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto leading-relaxed">
                    Estamos trabalhando para trazer uma experiência ainda melhor para você.
                </p>

                <!-- Additional Info -->
                <div class="pt-8">
                    <p class="text-lg text-zinc-500 dark:text-zinc-500 font-semibold">
                        Em breve, novidades incríveis!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with Social Media -->
    <footer class="bg-gradient-to-b from-brand-blue-dark to-brand-blue text-white py-8 w-full">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center space-y-6">
                <!-- Social Media Title -->
                <h3 class="text-2xl font-bold text-brand-orange">Fale Conosco</h3>
                <p class="text-sm text-white/80">Dúvidas? Entre em contato conosco</p>

                <!-- Social Media Links -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/jpcontabil.tg/" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-4 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-xl border-2 border-brand-orange/30 hover:border-brand-orange hover:bg-white/20 transition-all duration-300 hover:scale-105 group min-w-[280px]">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-10 h-10">
                        <div class="text-left">
                            <p class="text-xs text-brand-orange font-semibold uppercase tracking-wide">Instagram</p>
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">@jpcontabil.tg</p>
                        </div>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/5549991352070" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-4 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-xl border-2 border-brand-orange/30 hover:border-brand-orange hover:bg-white/20 transition-all duration-300 hover:scale-105 group min-w-[280px]">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-10 h-10">
                        <div class="text-left">
                            <p class="text-xs text-brand-orange font-semibold uppercase tracking-wide">WhatsApp</p>
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">(49) 9 9135-2070</p>
                        </div>
                    </a>
                </div>

                <!-- Copyright -->
                <div class="pt-6 border-t border-brand-orange/20 w-full max-w-2xl text-center">
                    <p class="text-sm text-white/70">
                        © {{ date('Y') }} Todos os direitos reservados
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>