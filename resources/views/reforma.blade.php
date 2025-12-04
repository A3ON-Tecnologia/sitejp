<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JP Contábil - Reforma Tributária</title>

    <link rel="icon" href="{{ asset('images/logo-3.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700" rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&family=Source+Serif+4:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-page-bg dark:bg-zinc-950 text-page-text min-h-screen">
    <header
        class="bg-brand-blue text-brand-orange p-4 w-full fixed top-0 left-0 shadow-lg z-50 border-b-4 border-brand-orange">
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
                    <button
                        class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        VOLTAR PARA O INÍCIO
                    </button>
                </a>
            </div>

            <!-- Login and Register Buttons -->
            <div class="flex space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-white font-bold hover:underline transition-colors cursor-pointer">Cadastro</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Title Section -->
        <section class="relative px-6 min-h-screen flex items-start justify-center overflow-hidden pt-32">
            <!-- Background Image -->
            <div class="absolute inset-0 w-full h-full z-0">
                <img src="{{ asset('images/bg-2.jpg') }}" alt="Background" class="w-full h-full object-cover">
            </div>

            <!-- Content Overlay -->
            <div class="container mx-auto max-w-6xl text-center relative z-10 pt-28">
                <h1 class="text-4xl md:text-6xl font-bold text-brand-orange mb-16"
                    style="font-family: 'Raleway', sans-serif;">
                    CRONOGRAMA REFORMA TRIBUTÁRIA
                </h1>

                <h2 class="text-4xl text-white mt-10 mb-10 text-center" style="font-family: 'Raleway', sans-serif;">
                    Entenda as Principais Mudanças
                </h2>

                <div class="bg-brand-orange p-6 rounded-lg mt-10">
                    <p class="text-2xl text-white text-center max-w-4xl mx-auto"
                        style="font-family: 'Source Serif 4', serif;">
                        A <span class="text-dark-blue font-bold">Reforma Tributária Brasileira</span> representa a maior
                        transformação do sistema fiscal do país em décadas. Com implementação gradual entre <span
                            class="text-dark-blue font-bold">2026 e 2033</span>, ela visa simplificar a complexa
                        estrutura de impostos, unificando tributos como <span class="text-dark-blue font-bold">PIS,
                            COFINS, ICMS e ISS</span> em um modelo mais eficiente.<br>
                        Esta linha do tempo interativa apresenta as principais etapas da transição, seus impactos
                        práticos e o que empresas e profissionais precisam saber para se preparar adequadamente. Clique
                        em cada período para explorar as mudanças específicas de cada fase.
                    </p>
                </div>
            </div>
        </section>

        <!-- Timeline Buttons -->
        <section class="py-8 px-6 bg-zinc-50 dark:bg-zinc-900 sticky top-20 z-40 shadow-md">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center gap-4">
                    <button onclick="scrollToSection(0)" id="btn-2025"
                        class="timeline-btn active px-8 py-4 rounded-lg font-bold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #E91E63;">
                        2025
                    </button>
                    <button onclick="scrollToSection(1)" id="btn-2026"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #2196F3;">
                        2026
                    </button>
                    <button onclick="scrollToSection(2)" id="btn-2027"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #9C27B0;">
                        2027
                    </button>
                    <button onclick="scrollToSection(3)" id="btn-2028"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #FF9800;">
                        2028-2029
                    </button>
                    <button onclick="scrollToSection(4)" id="btn-2030"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold text-white transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #4CAF50;">
                        2030-2033
                    </button>
                </div>
            </div>
        </section>

        <!-- Carousel Container -->
        <div class="carousel-container overflow-x-hidden scroll-smooth" id="carousel">
            <div class="carousel-wrapper flex">
                <!-- Section 2025 -->
                <div class="carousel-section min-w-full px-6 py-16" id="section-2025">
                    <div class="container mx-auto max-w-6xl">
                        <h2 class="text-4xl font-bold text-brand-blue mb-8 text-center">2025</h2>
                        <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-zinc-600 dark:text-zinc-400 text-center">
                                Conteúdo do período 2025 será adicionado aqui...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2026 -->
                <div class="carousel-section min-w-full px-6 py-16" id="section-2026">
                    <div class="container mx-auto max-w-6xl">
                        <h2 class="text-4xl font-bold text-brand-blue mb-8 text-center">2026</h2>
                        <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-zinc-600 dark:text-zinc-400 text-center">
                                Conteúdo do período 2026 será adicionado aqui...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2027 -->
                <div class="carousel-section min-w-full px-6 py-16" id="section-2027">
                    <div class="container mx-auto max-w-6xl">
                        <h2 class="text-4xl font-bold text-brand-blue mb-8 text-center">2027</h2>
                        <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-zinc-600 dark:text-zinc-400 text-center">
                                Conteúdo do período 2027 será adicionado aqui...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2028-2029 -->
                <div class="carousel-section min-w-full px-6 py-16" id="section-2028">
                    <div class="container mx-auto max-w-6xl">
                        <h2 class="text-4xl font-bold text-brand-blue mb-8 text-center">2028-2029</h2>
                        <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-zinc-600 dark:text-zinc-400 text-center">
                                Conteúdo do período 2028-2029 será adicionado aqui...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2030-2033 -->
                <div class="carousel-section min-w-full px-6 py-16" id="section-2030">
                    <div class="container mx-auto max-w-6xl">
                        <h2 class="text-4xl font-bold text-brand-blue mb-8 text-center">2030-2033</h2>
                        <div class="bg-white dark:bg-zinc-800 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-zinc-600 dark:text-zinc-400 text-center">
                                Conteúdo do período 2030-2033 será adicionado aqui...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        /* Timeline Button Active State */
        .timeline-btn.active {
            transform: scale(1.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            ring: 4px;
            ring-color: rgba(255, 255, 255, 0.5);
        }

        /* Carousel */
        .carousel-container {
            scroll-snap-type: x mandatory;
        }

        .carousel-section {
            scroll-snap-align: start;
        }

        .text-dark-blue {
            color: #03055B;
        }
    </style>

    <script>
        function scrollToSection(index) {
            const carousel = document.getElementById('carousel');
            const sections = document.querySelectorAll('.carousel-section');
            const buttons = document.querySelectorAll('.timeline-btn');

            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add active class to clicked button
            buttons[index].classList.add('active');

            // Scroll to section
            const targetSection = sections[index];
            carousel.scrollTo({
                left: targetSection.offsetLeft,
                behavior: 'smooth'
            });
        }

        // Update active button on scroll
        const carousel = document.getElementById('carousel');
        const buttons = document.querySelectorAll('.timeline-btn');
        const sections = document.querySelectorAll('.carousel-section');

        carousel.addEventListener('scroll', () => {
            const scrollPosition = carousel.scrollLeft;
            const sectionWidth = sections[0].offsetWidth;
            const currentIndex = Math.round(scrollPosition / sectionWidth);

            buttons.forEach((btn, index) => {
                if (index === currentIndex) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>
