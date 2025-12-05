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
    <header
        class="bg-brand-blue text-brand-orange p-4 w-full fixed top-0 left-0 shadow-lg z-50 border-b-4 border-brand-orange">
        <div class="container mx-auto flex justify-between items-center relative">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 80px; width: auto;">
                </a>
            </div>

            <!-- Center Button -->
            <div class="hidden md:flex md:flex-1 justify-center">
                <a href="{{ url('/reforma') }}" class="cursor-pointer">
                    <button
                        class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        REFORMA TRIBUTÁRIA
                    </button>
                </a>
            </div>

            <!-- Desktop Login Button -->
            <div class="hidden md:flex items-center">
                <a href="{{ route('login') }}"
                    class="text-white font-bold hover:underline transition-colors cursor-pointer">
                    ÁREA DO CLIENTE
                </a>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <button id="hamburger-menu" class="md:hidden text-brand-orange focus:outline-none p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu"
                class="hidden md:hidden fixed top-20 left-0 w-screen bg-brand-blue border-b-4 border-brand-orange shadow-lg z-40">
                <div class="flex flex-col items-center py-6 space-y-6">
                    <!-- Mobile Center Button -->
                    <a href="{{ url('/reforma') }}" class="cursor-pointer">
                        <button
                            class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                            Cronograma Reforma
                        </button>
                    </a>

                    <!-- Mobile Login Links -->
                    <a href="{{ route('login') }}"
                        class="text-white font-bold hover:underline transition-colors cursor-pointer text-lg">
                        ÁREA DO CLIENTE
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Section - Two Columns -->
    <section
        class="pt-28 md:pt-36 pb-10 md:pb-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-zinc-50 via-white to-zinc-100 dark:from-zinc-950 dark:via-zinc-900 dark:to-zinc-950">
        <div class="container mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="text-center mb-8 md:mb-12 mt-4 md:mt-0">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-brand-blue mb-3">
                    Conheça a <span class="text-brand-orange">JP Contábil</span>
                </h1>
                <div class="flex items-center justify-center gap-2 mb-3">
                    <div class="h-1 w-10 md:w-16 bg-brand-orange rounded-full"></div>
                    <div class="h-2 w-2 bg-brand-orange rounded-full"></div>
                    <div class="h-1 w-10 md:w-16 bg-brand-orange rounded-full"></div>
                </div>
                <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto">
                    Excelência em serviços contábeis com foco no seu sucesso
                </p>
            </div>

            <div class="flex flex-col-reverse lg:flex-row gap-8 lg:gap-12 items-start">

                <!-- Left Column - Mission, Vision, Values -->
                <div class="flex-1 space-y-5 md:space-y-6">
                    <!-- Team Image -->
                    <div class="relative group">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-brand-blue to-brand-orange rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-500">
                        </div>
                        <div class="relative">
                            <img src="{{ asset('images/grupo-jp.jpg') }}" alt="Equipe JP Contábil"
                                class="w-full h-auto max-h-64 md:max-h-80 rounded-2xl shadow-2xl object-contain bg-zinc-100 md:bg-gradient-to-r md:from-brand-blue md:to-brand-orange dark:bg-zinc-800 dark:md:bg-gradient-to-r dark:md:from-brand-blue dark:md:to-brand-orange">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl p-4 md:p-5">
                                <p class="text-white font-bold text-base md:text-lg">Equipe JP Contábil</p>
                                <p class="text-white/90 text-xs md:text-sm">Comprometida com o seu sucesso</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div
                        class="group bg-white dark:bg-zinc-800 rounded-xl p-5 md:p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-zinc-200 dark:border-zinc-700">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 bg-brand-blue/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-brand-blue"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg md:text-xl font-bold text-brand-blue mb-2">Nossa Missão</h3>
                                <p class="text-zinc-700 dark:text-zinc-300 leading-relaxed text-sm">
                                    Prestar serviços e orientação com <span
                                        class="font-semibold text-brand-orange">empatia, qualidade e
                                        profissionalismo</span>,
                                    proporcionando ao cliente e à sociedade <span
                                        class="font-semibold text-brand-blue">segurança e confiabilidade</span>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Vision Card -->
                    <div
                        class="group bg-white dark:bg-zinc-800 rounded-xl p-5 md:p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-zinc-200 dark:border-zinc-700">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 bg-brand-orange/10 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-brand-orange"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg md:text-xl font-bold text-brand-orange mb-2">Nossa Visão</h3>
                                <p class="text-zinc-700 dark:text-zinc-300 leading-relaxed text-sm">
                                    Ser <span class="font-semibold text-brand-blue">referência nos serviços
                                        prestados</span> por meio da transmissão de
                                    informações seguras, de forma objetiva e esclarecedora, utilizando <span
                                        class="font-semibold text-brand-orange">soluções inovadoras</span>
                                    com foco no desenvolvimento do cliente e da sociedade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Maintenance & Tax Reform -->
                <div class="flex-1 space-y-5 md:space-y-6">
                    <!-- Tax Reform CTA Card -->
                    <div class="relative group">
                        <!-- Glow effect -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-brand-orange to-orange-600 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-500">
                        </div>

                        <!-- Card content -->
                        <div
                            class="relative bg-gradient-to-br from-brand-orange via-orange-500 to-orange-600 rounded-xl p-5 md:p-8 shadow-2xl">
                            <div class="text-center space-y-4 md:space-y-5">

                                <!-- Title -->
                                <div>
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-white mb-2">
                                        Cronograma Completo Reforma Tributária
                                    </h2>
                                    <div class="flex items-center justify-center gap-2">
                                        <div class="h-0.5 w-12 bg-white/50 rounded-full"></div>
                                        <div class="h-1.5 w-1.5 bg-white rounded-full"></div>
                                        <div class="h-0.5 w-12 bg-white/50 rounded-full"></div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <a href="{{ url('/reforma') }}" class="block">
                                    <button
                                        class="w-full bg-white text-brand-orange px-6 md:px-8 py-3.5 md:py-4 rounded-xl font-bold text-base md:text-lg hover:bg-zinc-50 hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-white/50 hover:border-white cursor-pointer">
                                        <span class="flex items-center justify-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            ACOMPANHE AS MUDANÇAS ATUALIZADAS
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance Card -->
                    <div
                        class="bg-white dark:bg-zinc-800 rounded-xl p-6 md:p-10 shadow-xl border border-zinc-200 dark:border-zinc-700">
                        <div class="text-center space-y-6 md:space-y-8">
                            <!-- Icon -->
                            <div class="flex justify-center">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-brand-orange/20 rounded-full blur-xl"></div>
                                    <img src="{{ asset('images/manutencao.png') }}" alt="Manutenção"
                                        class="relative w-20 h-20 md:w-24 md:h-24 animate-pulse">
                                </div>
                            </div>

                            <!-- Title -->
                            <div>
                                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-brand-blue mb-4">
                                    Site em Manutenção
                                </h2>

                                <!-- Divider -->
                                <div class="flex items-center justify-center gap-2 md:gap-3">
                                    <div class="h-1 w-16 md:w-24 bg-brand-orange rounded-full"></div>
                                    <div class="h-2.5 w-2.5 bg-brand-orange rounded-full"></div>
                                    <div class="h-1 w-16 md:w-24 bg-brand-orange rounded-full"></div>
                                </div>
                            </div>

                            <!-- Description -->
                            <p
                                class="text-base md:text-lg text-zinc-600 dark:text-zinc-400 leading-relaxed max-w-md mx-auto">
                                Estamos trabalhando para trazer uma <span
                                    class="font-semibold text-brand-blue">experiência ainda melhor</span> para você.
                            </p>

                            <br>

                            <!-- Progress Bar -->
                            <div class="max-w-sm mx-auto">
                                <div class="w-full bg-zinc-200 dark:bg-zinc-700 rounded-full h-2.5 overflow-hidden">
                                    <div class="bg-gradient-to-r from-brand-blue via-brand-orange to-brand-blue h-2.5 rounded-full animate-pulse"
                                        style="width: 75%"></div>
                                </div>
                                <p class="text-xs md:text-sm text-zinc-500 dark:text-zinc-400 mt-3">
                                    ⏱️ Em breve, novidades incríveis!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Values Card - Full Width -->
            <div
                class="bg-gradient-to-br from-brand-blue via-brand-blue to-brand-blue-dark rounded-xl p-5 md:p-6 shadow-xl hover:shadow-2xl transition-all duration-300 mt-8">
                <div class="flex items-center gap-3 mb-4 justify-center">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-brand-orange"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white">Nossos Valores</h3>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-2 md:gap-3 max-w-6xl mx-auto">
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Ética</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Respeito</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Confiança</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Comprometimento</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Excelência</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Honestidade</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Responsabilidade</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Transparência</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Sustentabilidade</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Solidariedade</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Integridade</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Educação</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Inovação</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Parceria</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2.5 text-center hover:bg-white/20 transition-colors duration-200">
                        <p class="text-white font-semibold text-xs md:text-sm">Profissionalismo</p>
                    </div>
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

                    <!-- Email -->
                    <a href="mailto:contato@jpcontabil.com.br"
                        class="flex items-center gap-4 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-xl border-2 border-brand-orange/30 hover:border-brand-orange hover:bg-white/20 transition-all duration-300 hover:scale-105 group min-w-[280px]">
                        <img src="{{ asset('images/email.png') }}" alt="Email" class="w-10 h-10">
                        <div class="text-left">
                            <p class="text-xs text-brand-orange font-semibold uppercase tracking-wide">Email</p>
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">
                                contato@jpcontabil.com.br</p>
                        </div>
                    </a>

                    <!-- Telefone -->
                    <a href="tel:+554933320120"
                        class="flex items-center gap-4 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-xl border-2 border-brand-orange/30 hover:border-brand-orange hover:bg-white/20 transition-all duration-300 hover:scale-105 group min-w-[280px]">
                        <img src="{{ asset('images/telefone.png') }}" alt="Telefone" class="w-10 h-10">
                        <div class="text-left">
                            <p class="text-xs text-brand-orange font-semibold uppercase tracking-wide">Telefone</p>
                            <p class="text-base font-bold text-white group-hover:text-brand-orange transition-colors">
                                (49) 3332-0120</p>
                        </div>
                    </a>
                </div>

                <!-- Address and Map Section -->
                <div class="pt-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                        <!-- Address Information -->
                        <div class="flex flex-col space-y-4">
                            <h3 class="text-2xl font-bold text-brand-orange mb-2 text-center lg:text-left">Localização
                            </h3>

                            <div
                                class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border-2 border-brand-orange/30 flex-1">
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">
                                    Endereço</p>
                                <p class="text-base text-white font-medium mb-2">JP Contábil</p>
                                <p class="text-sm text-white/80 leading-relaxed">
                                    Av. Irmãos Piccoli, 480<br>
                                    Bairro Centro<br>
                                    Tangará - SC, 89642-000<br>
                                    Brasil
                                </p>
                            </div>

                            <div
                                class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border-2 border-brand-orange/30 flex-1">
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">Horário
                                    de Funcionamento</p>
                                <p class="text-sm text-white/80">
                                    Segunda a Sexta-feira<br>
                                    <span class="text-white font-medium">07:30 - 12:00 / 13:00 - 18:00</span>
                                </p>
                            </div>
                        </div>

                        <!-- Google Maps Embed -->
                        <div class="w-full h-auto rounded-xl overflow-hidden border-2 border-brand-orange/30 shadow-lg"
                            style="height: 100%;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221.97866256896083!2d-51.2439743189634!3d-27.104058586927575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e15a143f0f4929%3A0xcdbb3ce8d2ae35aa!2sJP%20Cont%C3%A1bil!5e0!3m2!1spt-BR!2sbr!4v1764939313362!5m2!1spt-BR!2sbr"
                                style="width: 100%; height: 100%; border: none;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="pt-8 border-t border-brand-orange/20 w-full max-w-5xl text-center">
                    <p class="text-sm text-white/70">
                        © {{ date('Y') }} Todos os direitos reservados
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('hamburger-menu').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
