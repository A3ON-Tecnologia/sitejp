<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JP Contábil</title>

    <link rel="icon" href="{{ asset('images/logo-3.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-page-bg dark:bg-zinc-950 text-page-text min-h-screen">
    <header class="bg-brand-blue text-brand-orange p-4 w-full fixed top-0 left-0 shadow-lg z-50 border-b-4 border-brand-orange">
        <div class="container mx-auto flex justify-between items-center relative">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </a>
            </div>

            <!-- Center Button -->
            <div class="hidden md:block">
                <a href="{{ url('/reforma') }}" class="cursor-pointer">
                    <button
                        class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        REFORMA TRIBUTÁRIA
                    </button>
                </a>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <button id="hamburger-menu" class="md:hidden text-brand-orange focus:outline-none p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden fixed top-20 left-0 w-screen bg-brand-blue border-b-4 border-brand-orange shadow-lg z-40">
                <div class="flex flex-col items-center py-6 space-y-6">
                    <!-- Mobile Center Button -->
                    <a href="{{ url('/reforma') }}" class="cursor-pointer">
                        <button
                            class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                            Cronograma Reforma
                        </button>
                    </a>

                    <!-- Mobile Login Links -->
                    <a href="{{ route('login') }}" class="text-white font-bold hover:underline transition-colors cursor-pointer text-lg">
                        Área do Cliente
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Maintenance Section -->
    <section class="pt-32 pb-16 px-6 bg-gradient-to-b from-page-bg to-zinc-50 dark:from-zinc-950 dark:to-zinc-900">
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

                    <!-- Tax Reform CTA -->
                    <div class="pt-6">
                        <p class="text-lg text-brand-blue font-medium mb-4">
                            Enquanto isso, acompanhe as mudanças da <span class="text-brand-orange font-bold">Reforma
                                Tributária</span>:
                        </p>
                        <a href="{{ url('/reforma') }}" class="inline-block">
                            <button
                                class="bg-brand-orange text-brand-blue px-8 py-3 rounded-lg font-bold text-lg hover:bg-brand-orange-hover hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl cursor-pointer">
                                Cronograma Reforma Tributária
                            </button>
                        </a>
                    </div>
                    <br>
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
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">
                                @jpcontabil.tg</p>
                        </div>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/5549991352070" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-4 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-xl border-2 border-brand-orange/30 hover:border-brand-orange hover:bg-white/20 transition-all duration-300 hover:scale-105 group min-w-[280px]">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-10 h-10">
                        <div class="text-left">
                            <p class="text-xs text-brand-orange font-semibold uppercase tracking-wide">WhatsApp</p>
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">
                                (49) 9 9135-2070</p>
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

    <script>
        document.getElementById('hamburger-menu').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
