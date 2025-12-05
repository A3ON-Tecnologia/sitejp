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
        <div class="container mx-auto flex justify-between items-center relative">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <img src="{{ asset('images/logo-4.png') }}" alt="Logo" style="height: 80px; width: auto;">
                </a>
            </div>

            <!-- Desktop Center Button -->
            <div class="hidden md:block">
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <button
                        class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        Voltar para o Início
                    </button>
                </a>
            </div>

            <!-- Desktop Login and Register Buttons -->
            <div class="hidden md:flex space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer">ÁREA DO
                            CLIENTE</a>
                        @if (Route::has('register'))
                        @endif
                    @endauth
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-brand-orange focus:outline-none p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-brand-blue border-b-4 border-brand-orange shadow-lg">
            <div class="flex flex-col items-center py-6 space-y-6">
                <!-- Mobile Center Button -->
                <a href="{{ url('/') }}" class="cursor-pointer">
                    <button
                        class="bg-brand-orange text-brand-blue px-6 py-2 rounded-lg font-semibold hover:bg-brand-orange-hover transition-colors duration-200 cursor-pointer">
                        Voltar para o Início
                    </button>
                </a>

                <!-- Mobile Login Links -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer text-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white font-bold hover:underline transition-colors cursor-pointer text-lg">Área do
                            Cliente</a>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <!-- Main Content -->
    <main>
        <!-- Title Section -->
        <section
            class="relative px-3 md:px-6 h-auto md:min-h-screen flex items-start justify-center overflow-hidden pt-20 md:pt-32 border-b-4 border-brand-orange">
            <!-- Background Image -->
            <div class="absolute inset-0 w-full h-full z-0">
                <img src="{{ asset('images/bg-2.jpg') }}" alt="Background" class="w-full h-full object-cover">
            </div>

            <!-- Content Overlay -->
            <div
                class="container mx-auto max-w-6xl text-center relative z-10 pt-20 md:pt-32 flex flex-col items-center justify-start min-h-full md:min-h-screen">
                <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold text-brand-orange mb-6 md:mb-8"
                    style="font-family: 'Raleway', sans-serif;">
                    CRONOGRAMA REFORMA TRIBUTÁRIA
                </h1>

                <!-- Year Filter Buttons -->
                <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-8 md:mb-12 px-2">
                    <button type="button" onclick="openModal('2025')"
                        class="px-4 md:px-8 py-3 md:py-4 text-sm md:text-lg lg:text-xl font-bold bg-brand-blue text-white border-2 border-brand-orange rounded-lg hover:text-brand-orange transition-all duration-300 cursor-pointer hover:scale-115 hover:shadow-2xl">
                        2025
                    </button>
                    <button type="button" onclick="openModal('2026')"
                        class="px-4 md:px-8 py-3 md:py-4 text-sm md:text-lg lg:text-xl font-bold bg-brand-blue text-white border-2 border-brand-orange rounded-lg hover:text-brand-orange transition-all duration-300 cursor-pointer hover:scale-115 hover:shadow-2xl">
                        2026
                    </button>
                    <button type="button" onclick="openModal('2027')"
                        class="px-4 md:px-8 py-3 md:py-4 text-sm md:text-lg lg:text-xl font-bold bg-brand-blue text-white border-2 border-brand-orange rounded-lg hover:text-brand-orange transition-all duration-300 cursor-pointer hover:scale-115 hover:shadow-2xl">
                        2027
                    </button>
                    <button type="button" onclick="openModal('2028-2029')"
                        class="px-4 md:px-8 py-3 md:py-4 text-sm md:text-lg lg:text-xl font-bold bg-brand-blue text-white border-2 border-brand-orange rounded-lg hover:text-brand-orange transition-all duration-300 cursor-pointer hover:scale-115 hover:shadow-2xl">
                        2028/2029
                    </button>
                    <button type="button" onclick="openModal('2030-2033')"
                        class="px-4 md:px-8 py-3 md:py-4 text-sm md:text-lg lg:text-xl font-bold bg-brand-blue text-white border-2 border-brand-orange rounded-lg hover:text-brand-orange transition-all duration-300 cursor-pointer hover:scale-115 hover:shadow-2xl">
                        2030-2033
                    </button>
                </div>

                <div class="bg-brand-orange p-3 md:p-6 rounded-lg mt-4 md:mt-0">
                    <p class="text-sm sm:text-base md:text-2xl text-white text-center max-w-4xl mx-auto"
                        style="font-family: 'Source Serif 4', serif;">
                        A <span class="text-dark-blue font-bold">Reforma Tributária Brasileira</span> representa a maior
                        transformação do sistema fiscal do país em décadas. Com implementação gradual entre <span
                            class="text-dark-blue font-bold">2026 e 2033</span>, ela visa simplificar a complexa
                        estrutura de impostos, unificando tributos como <span class="text-dark-blue font-bold">PIS,
                            COFINS, ICMS e ISS</span> em um modelo mais eficiente.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="mt-8 md:mt-16 mb-4 md:mb-12">
                    <a href=""
                        class="inline-flex items-center gap-2 md:gap-3 bg-brand-blue text-brand-orange px-6 md:px-12 py-3 md:py-4 rounded-lg font-bold md:text-xl hover:bg-opacity-90 transition-all duration-300 border-2 border-brand-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                        </svg>
                        CONFIRA O CRONOGRAMA
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Modals for Year Timelines -->
    <!-- Modal 2025 -->
    <div id="modal-2025" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full py-8 px-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[80vh] overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2025</h2>
                    <button type="button" onclick="closeModal('2025')"
                        class="text-brand-orange hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <!-- Início do Projeto Piloto -->
                    <div
                        class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-5 border-l-4 border-brand-blue">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-brand-blue mb-2">Início do Projeto Piloto</h3>
                                <p class="text-gray-700">Início oficial em <span
                                        class="font-semibold text-brand-orange">07/07/2025</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- NFe adaptada -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">NFe adaptada (CBS/IBS/IS)</h3>
                                <p class="text-gray-600 text-sm">Liberação do modelo 55 com CST 0000 e cClassTrib
                                    000001</p>
                            </div>
                        </div>
                    </div>

                    <!-- Apuração Assistida -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Apuração Assistida (AA)</h3>
                                <p class="text-gray-600 text-sm">Processamento automático de débitos e créditos da CBS
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Simuladores -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Simuladores (DFe e Pagamentos)</h3>
                                <p class="text-gray-600 text-sm">Emissão de NFe e DARF de teste</p>
                            </div>
                        </div>
                    </div>

                    <!-- Split Payment -->
                    <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-5">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-yellow-600 flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Split Payment</h3>
                                <p class="text-gray-700 text-sm">Recurso definido, mas ainda não disponível para testes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2026 -->
    <div id="modal-2026" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full py-8 px-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[80vh] overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2026</h2>
                    <button type="button" onclick="closeModal('2026')"
                        class="text-brand-orange hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <!-- NFe / NFCe -->
                    <div
                        class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-5 border-l-4 border-brand-blue">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-brand-blue mb-3">NFe / NFCe</h3>
                                <div class="space-y-2">
                                    <p class="text-gray-700"><span class="font-semibold text-brand-orange">Em vigor a
                                            partir de 01/01/2026:</span></p>
                                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm ml-4">
                                        <li>As NFe/NFCe passam a ser confissão de dívida</li>
                                        <li>Proibição de NFCe para pessoa jurídica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nota Fiscal de Serviços -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-3">Nota Fiscal de Serviços</h3>
                                <p class="text-gray-700 text-sm mb-2"><span class="font-semibold text-brand-blue">A
                                        partir de 01/01/2026:</span></p>
                                <p class="text-gray-600 text-sm">Padrão Nacional da Nota fiscal de Serviços</p>
                            </div>
                        </div>
                    </div>

                    <!-- CIB obrigatório -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">CIB obrigatório</h3>
                                <p class="text-gray-600 text-sm">Entra em Vigor a partir de <span
                                        class="font-semibold text-brand-orange">01/01/2026</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Piloto da Reforma -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-3">Piloto da Reforma</h3>
                                <div class="space-y-2">
                                    <p class="text-gray-600 text-sm">Testes até <span
                                            class="font-semibold text-brand-blue">31/12/2026</span></p>
                                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm ml-4">
                                        <li>Novos CST/cClassTrib</li>
                                        <li>Expansão dos cenários tributários</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Split Payment -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Split Payment</h3>
                                <p class="text-gray-600 text-sm">Preparação ampliada</p>
                            </div>
                        </div>
                    </div>

                    <!-- CNPJ Alfanumérico -->
                    <div class="bg-green-50 border border-green-200 rounded-xl p-5">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-green-600 flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-3">CNPJ Alfanumérico</h3>
                                <div class="space-y-2">
                                    <p class="text-gray-700 text-sm"><span class="font-semibold text-green-700">A
                                            partir de Julho 2026:</span></p>
                                    <p class="text-gray-600 text-sm">Quem já está inscrito no CNPJ permanecerá com o
                                        seu número válido</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2027 -->
    <div id="modal-2027" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full py-8 px-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[80vh] overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2027</h2>
                    <button type="button" onclick="closeModal('2027')"
                        class="text-brand-orange hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <!-- Split Payment -->
                    <div
                        class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-5 border-l-4 border-brand-blue">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-brand-blue mb-3">Split Payment</h3>
                                <div class="space-y-3">
                                    <p class="text-gray-700"><span class="font-semibold text-brand-orange">Início da
                                            implementação progressiva:</span></p>
                                    <ul class="list-disc list-inside space-y-2 text-gray-600 text-sm ml-4">
                                        <li>O modelo de segregação automática do valor do tributo na liquidação
                                            financeira começa a ser ativado em etapas</li>
                                        <li>A implementação ocorre de modo gradual, com foco em setores e meios de
                                            pagamento preparados</li>
                                        <li>A tecnologia e os operadores financeiros começam a entrar no ambiente de
                                            conformidade real</li>
                                        <li class="font-semibold text-brand-blue">Não há obrigatoriedade plena para
                                            todos os contribuintes</li>
                                        <li class="italic">Não é a fase "universal" do split — essa entra mais adiante
                                            na transição do IVA dual</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Início da Cobrança da CBS -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Início da Cobrança da CBS (parcial)
                                </h3>
                                <p class="text-gray-600 text-sm">Começa a cobrança da CBS com alíquota reduzida, fase
                                    inicial da transição</p>
                            </div>
                        </div>
                    </div>

                    <!-- Redução gradual de PIS/COFINS -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Redução gradual de PIS/COFINS</h3>
                                <p class="text-gray-600 text-sm">PIS e COFINS começam a ser substituídos parcialmente
                                    pela CBS</p>
                            </div>
                        </div>
                    </div>

                    <!-- Primeiro ano de convivência real -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Primeiro ano de convivência real entre
                                    sistemas</h3>
                                <p class="text-gray-600 text-sm">Operações passam a ter efeitos financeiros simultâneos
                                    no modelo antigo e no novo</p>
                            </div>
                        </div>
                    </div>

                    <!-- Ampliação da base de creditamento -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Ampliação da base de creditamento</h3>
                                <p class="text-gray-600 text-sm">Crédito da CBS passa a seguir a lógica plena da não
                                    cumulatividade</p>
                            </div>
                        </div>
                    </div>

                    <!-- Ajuste das alíquotas -->
                    <div class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Ajuste das alíquotas de referência
                                </h3>
                                <p class="text-gray-600 text-sm">Alíquotas da CBS são recalibradas com base na
                                    arrecadação real</p>
                            </div>
                        </div>
                    </div>

                    <!-- Transição federativa -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 flex-shrink-0 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Transição federativa para o IBS</h3>
                                <p class="text-gray-700 text-sm">União inicia a transferência progressiva das receitas
                                    do ICMS/ISS para o IBS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2028/2029 -->
    <div id="modal-2028-2029" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full py-8 px-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[80vh] overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2028/2029</h2>
                    <button type="button" onclick="closeModal('2028-2029')"
                        class="text-brand-orange hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6 md:p-8 space-y-8">
                    <!-- 2028 Section -->
                    <div class="border-b border-gray-300 pb-8">
                        <h3 class="text-2xl font-bold text-brand-blue mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-orange" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2028
                        </h3>
                        <div class="space-y-5">
                            <!-- CBS em alíquota cheia -->
                            <div
                                class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-5 border-l-4 border-brand-blue">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-brand-blue mb-2">CBS em alíquota cheia</h4>
                                        <p class="text-gray-600 text-sm">A CBS deixa a fase de alíquota reduzida e
                                            passa a ser cobrada em sua alíquota plena</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Redução adicional do PIS/COFINS -->
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">Redução adicional do
                                            PIS/COFINS</h4>
                                        <p class="text-gray-600 text-sm">Avança a substituição definitiva de PIS e
                                            COFINS pela CBS</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expansão do Split Payment -->
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">Expansão do Split Payment</h4>
                                        <p class="text-gray-600 text-sm">O Split Payment amplia o escopo de aplicação,
                                            cobrindo setores e meios de pagamento adicionais</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <!-- IBS em fase de teste ampliada -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">IBS em fase de teste
                                                ampliada</h4>
                                            <p class="text-gray-600 text-xs">Estados e Municípios avançam na unificação
                                                operacional do IBS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transição federativa aprofundada -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">Transição federativa
                                                aprofundada</h4>
                                            <p class="text-gray-600 text-xs">Maior parcela do ICMS/ISS migra para o IBS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Consolidação da não cumulatividade plena -->
                            <div class="bg-green-50 border border-green-200 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-green-600 flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">Consolidação da não
                                            cumulatividade plena</h4>
                                        <p class="text-gray-700 text-sm">O sistema CBS/IBS passa a refletir, em escala
                                            maior, o modelo de crédito financeiro universal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2029 Section -->
                    <div>
                        <h3 class="text-2xl font-bold text-brand-orange mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-blue" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2029
                        </h3>
                        <div class="space-y-5">
                            <!-- Integração total dos DF-e -->
                            <div
                                class="bg-gradient-to-r from-brand-orange/10 to-brand-blue/10 rounded-xl p-5 border-l-4 border-brand-orange">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-brand-orange mb-2">Integração total dos DF-e
                                            com o IVA Dual</h4>
                                        <p class="text-gray-600 text-sm">Documentos fiscais eletrônicos passam a rodar
                                            majoritariamente já no modelo CBS/IBS/IS</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Ambiente fiscal híbrido -->
                            <div class="bg-red-50 border-2 border-red-300 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-red-700 mb-2">Ambiente fiscal híbrido (pico
                                            da transição)</h4>
                                        <p class="text-red-800 text-sm font-semibold mb-2">2029 é o ano com maior
                                            complexidade operacional:</p>
                                        <p class="text-gray-700 text-sm">Convivem ICMS/ISS + IBS e PIS/COFINS residuais
                                            + CBS plena</p>
                                    </div>
                                </div>
                            </div>

                            <!-- IBS inicia cobrança -->
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">IBS inicia cobrança com
                                            alíquota reduzida</h4>
                                        <p class="text-gray-600 text-sm">Começa a cobrança do IBS em fase inicial, com
                                            alíquota reduzida, dando início à convivência real entre ICMS/ISS e IBS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <!-- Redução proporcional de ICMS e ISS -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">Redução proporcional de
                                                ICMS e ISS</h4>
                                            <p class="text-gray-600 text-xs">Parte da arrecadação do ICMS/ISS começa a
                                                ser progressivamente substituída pelo IBS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- CBS totalmente implantada -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">CBS totalmente implantada
                                            </h4>
                                            <p class="text-gray-600 text-xs">A CBS já opera em regime pleno,
                                                substituindo PIS/COFINS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Split Payment em expansão avançada -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-orange flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">Split Payment em expansão
                                                avançada</h4>
                                            <p class="text-gray-600 text-xs">Amplia sua aplicação para um número maior
                                                de setores e operações</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transição federativa intensificada -->
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-brand-blue flex-shrink-0 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900 mb-1 text-sm">Transição federativa
                                                intensificada</h4>
                                            <p class="text-gray-600 text-xs">Receitas estaduais e municipais migram de
                                                maneira mais acelerada para o Comitê Gestor do IBS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aprimoramento da não cumulatividade -->
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">Aprimoramento da não
                                            cumulatividade</h4>
                                        <p class="text-gray-700 text-sm">O compartilhamento de créditos entre CBS e IBS
                                            começa a refletir a lógica integrada do IVA dual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2030-2033 -->
    <div id="modal-2030-2033" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full py-8 px-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[80vh] overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2030-2033</h2>
                    <button type="button" onclick="closeModal('2030-2033')"
                        class="text-brand-orange hover:text-white transition-colors cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6 md:p-8 space-y-8">
                    <!-- Header Introduction -->
                    <div
                        class="bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-300 rounded-xl p-6 text-center">
                        <h3 class="text-2xl font-bold text-green-700 mb-2">Fase Final da Transição</h3>
                        <p class="text-gray-700">2030-2033: Conclusão completa do IVA Dual Brasileiro</p>
                    </div>

                    <!-- 2030 Section -->
                    <div class="border-b border-gray-300 pb-8">
                        <h3 class="text-2xl font-bold text-brand-blue mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-orange" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2030
                        </h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div
                                class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-4 border-l-4 border-brand-blue">
                                <h4 class="font-bold text-brand-blue mb-2">IBS com alíquota crescente</h4>
                                <p class="text-gray-600 text-sm">O IBS aumenta sua participação, reduzindo ainda mais
                                    ICMS e ISS</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Aprimoramento do modelo dual</h4>
                                <p class="text-gray-600 text-sm">CBS plena + IBS crescente formam o núcleo do IVA
                                    brasileiro</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Redução significativa de ICMS e ISS</h4>
                                <p class="text-gray-600 text-sm">Estados e municípios iniciam dependência menor do
                                    modelo antigo</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Split Payment quase universal</h4>
                                <p class="text-gray-600 text-sm">Mecanismo atinge grande parte das operações de
                                    pagamento</p>
                            </div>
                            <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                                <h4 class="font-bold text-gray-900 mb-2">Harmonização dos créditos</h4>
                                <p class="text-gray-600 text-sm">Modelo de crédito financeiro totalmente consolidado
                                    entre CBS e IBS</p>
                            </div>
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                <h4 class="font-bold text-gray-900 mb-2">Integração avançada dos DF-e</h4>
                                <p class="text-gray-600 text-sm">Todos os documentos fiscais operam praticamente só no
                                    modelo CBS/IBS</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2031 Section -->
                    <div class="border-b border-gray-300 pb-8">
                        <h3 class="text-2xl font-bold text-brand-orange mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-blue" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2031
                        </h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div
                                class="bg-gradient-to-r from-brand-orange/10 to-brand-blue/10 rounded-xl p-4 border-l-4 border-brand-orange">
                                <h4 class="font-bold text-brand-orange mb-2">IBS em nova fase de aumento gradual</h4>
                                <p class="text-gray-600 text-sm">IBS segue crescendo conforme o cronograma anual</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Queda acentuada de ICMS e ISS</h4>
                                <p class="text-gray-600 text-sm">Antigos tributos sobre consumo se tornam residuais</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Transparência tributária fortalecida</h4>
                                <p class="text-gray-600 text-sm">Nota fiscal evidencia completamente CBS, IBS e IS</p>
                            </div>
                            <div
                                class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                <h4 class="font-bold text-gray-900 mb-2">Split Payment em plena expansão</h4>
                                <p class="text-gray-600 text-sm">Aplicação quase total no varejo, serviços e pagamentos
                                    digitais</p>
                            </div>
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                <h4 class="font-bold text-gray-900 mb-2">Integração federativa consolidada</h4>
                                <p class="text-gray-600 text-sm">Comitê Gestor do IBS assume praticamente toda a
                                    coordenação</p>
                            </div>
                            <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                                <h4 class="font-bold text-gray-900 mb-2">Simplificação operacional máxima</h4>
                                <p class="text-gray-600 text-sm">Ambiente fiscal opera majoritariamente em lógica de
                                    IVA</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2032 Section -->
                    <div class="border-b border-gray-300 pb-8">
                        <h3 class="text-2xl font-bold text-brand-blue mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-orange" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2032
                        </h3>
                        <div class="space-y-4">
                            <div
                                class="bg-gradient-to-r from-brand-blue/10 to-brand-orange/10 rounded-xl p-5 border-l-4 border-brand-blue">
                                <h4 class="text-lg font-bold text-brand-blue mb-2">IBS próximo da alíquota final</h4>
                                <p class="text-gray-600 text-sm">IBS chega perto de sua participação definitiva no
                                    modelo</p>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-yellow-50 border-2 border-yellow-400 rounded-xl p-4">
                                    <h4 class="font-bold text-yellow-800 mb-2">Fim funcional de ICMS e ISS</h4>
                                    <p class="text-gray-700 text-sm">Tributos antigos tornam-se mínimos, restando
                                        situações residuais</p>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-xl p-4">
                                    <h4 class="font-bold text-green-700 mb-2">Modelo de IVA praticamente completo</h4>
                                    <p class="text-gray-600 text-sm">CBS + IBS passam a representar quase toda
                                        tributação do consumo</p>
                                </div>
                                <div
                                    class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 mb-2">Split Payment totalmente difundido</h4>
                                    <p class="text-gray-600 text-sm">Praticamente todas as operações financeiras
                                        utilizam o mecanismo</p>
                                </div>
                                <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                    <h4 class="font-bold text-gray-900 mb-2">Estabilização da arrecadação</h4>
                                    <p class="text-gray-600 text-sm">Ajustes finais das alíquotas de equilíbrio
                                        federativo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2033 Section - FINAL -->
                    <div>
                        <div
                            class="bg-gradient-to-r from-green-500 to-blue-500 text-white rounded-xl p-6 mb-6 text-center">
                            <h3 class="text-3xl font-bold mb-2 flex items-center justify-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                2033 - CONCLUSÃO DA REFORMA
                            </h3>
                            <p class="text-white/90">Ano final da transição - IVA Dual plenamente implantado</p>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-2 border-green-500 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-7 w-7 text-green-600 flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold text-green-700 mb-2">IBS atinge alíquota cheia e
                                            definitiva</h4>
                                        <p class="text-gray-700">Conclusão da transição; IBS substitui integralmente
                                            ICMS/ISS</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-red-50 to-orange-50 border-2 border-red-400 rounded-xl p-5">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-7 w-7 text-red-600 flex-shrink-0 mt-0.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold text-red-700 mb-2">Fim completo de ICMS, ISS, PIS
                                            e COFINS</h4>
                                        <p class="text-gray-700">Antigos tributos sobre consumo são encerrados</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-blue-50 border-2 border-blue-400 rounded-xl p-4">
                                    <h4 class="font-bold text-blue-700 mb-2">IVA dual plenamente implantado</h4>
                                    <p class="text-gray-700 text-sm">CBS e IBS passam a ser os únicos tributos sobre
                                        consumo</p>
                                </div>
                                <div class="bg-green-50 border border-green-300 rounded-xl p-4">
                                    <h4 class="font-bold text-green-700 mb-2">Modelo tributário estabilizado</h4>
                                    <p class="text-gray-600 text-sm">Ano de funcionamento normal do novo sistema</p>
                                </div>
                                <div class="bg-purple-50 border border-purple-300 rounded-xl p-4">
                                    <h4 class="font-bold text-purple-700 mb-2">Split Payment se torna padrão único</h4>
                                    <p class="text-gray-600 text-sm">Todas as liquidações financeiras segregam
                                        automaticamente os tributos</p>
                                </div>
                                <div class="bg-indigo-50 border border-indigo-300 rounded-xl p-4">
                                    <h4 class="font-bold text-indigo-700 mb-2">Ambiente fiscal simplificado</h4>
                                    <p class="text-gray-600 text-sm">Sistema de apuração totalmente baseado em crédito
                                        financeiro</p>
                                </div>
                            </div>

                            <!-- Final Message -->
                            <div
                                class="bg-gradient-to-r from-brand-blue to-brand-orange text-white rounded-xl p-6 text-center mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                                <h4 class="text-2xl font-bold mb-2">Reforma Tributária Concluída</h4>
                                <p class="text-white/90">Brasil adota oficialmente o sistema de IVA Dual moderno e
                                    simplificado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-zinc-50 via-white to-zinc-100">
        <div class="container mx-auto max-w-4xl">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-brand-blue mb-4">
                    Perguntas Frequentes
                </h2>
                <div class="flex items-center justify-center gap-2 mb-4">
                    <div class="h-1 w-16 md:w-24 bg-brand-orange rounded-full"></div>
                    <div class="h-2.5 w-2.5 bg-brand-orange rounded-full"></div>
                    <div class="h-1 w-16 md:w-24 bg-brand-orange rounded-full"></div>
                </div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Tire suas dúvidas sobre a Reforma Tributária
                </p>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(1)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                1
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">
                                O que é a Reforma Tributária?
                            </h3>
                        </div>
                        <svg id="faq-icon-1" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-1" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>A Reforma Tributária é uma alteração no Sistema Tributário Brasileiro, promovida pela
                                Emenda Constitucional nº 132/2023, que visa simplificar e tornar mais justo o sistema de
                                tributos no país, impactando diretamente cidadãos e empresas.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(2)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                2
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">
                                Quais são os principais princípios da Reforma Tributária?
                            </h3>
                        </div>
                        <svg id="faq-icon-2" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-2" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p class="mb-3">Os princípios fundamentais incluem:</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li><strong>Simplicidade:</strong> Normas mais claras e compreensíveis.</li>
                                <li><strong>Transparência:</strong> Informações acessíveis sobre tributos.</li>
                                <li><strong>Justiça Tributária:</strong> Redução das injustiças sociais na tributação.
                                </li>
                                <li><strong>Cooperação:</strong> Colaboração entre Fiscos e contribuintes.</li>
                                <li><strong>Defesa do Meio Ambiente:</strong> Incentivos fiscais para atividades
                                    ecológicas.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Items 3-10 (placeholders) -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(3)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                3
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Quais tributos serão extintos e quais
                                novos serão criados?</h3>
                        </div>
                        <svg id="faq-icon-3" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-3" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p class="font-semibold mb-2">Os tributos que serão extintos incluem:</p>
                            <ul class="list-disc list-inside space-y-1 ml-4 mb-4">
                                <li>PIS</li>
                                <li>COFINS</li>
                                <li>IPI (com alíquotas zeradas)</li>
                            </ul>
                            <p class="font-semibold mb-2">Novos tributos que serão criados:</p>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li><strong>CBS:</strong> Contribuição sobre Bens e Serviços, cobrada pela União.</li>
                                <li><strong>IBS:</strong> Imposto sobre Bens e Serviços, cobrado pelos Estados e
                                    Municípios.</li>
                                <li><strong>Imposto Seletivo:</strong> Sobre produtos prejudiciais à saúde e ao meio
                                    ambiente.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(4)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                4</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Como a Reforma Tributária afetará o IPI e
                                a Zona Franca de Manaus?</h3>
                        </div>
                        <svg id="faq-icon-4" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-4" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>O IPI terá suas alíquotas zeradas, exceto para produtos concorrentes de fora da Zona
                                Franca de Manaus, onde a cobrança continuará para proteger as indústrias locais.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(5)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                5</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">O que é o split payment?</h3>
                        </div>
                        <svg id="faq-icon-5" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-5" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>Split payment é um mecanismo onde prestadores de serviços de pagamentos eletrônicos (como
                                bancos e operadoras de cartão) segregam e recolhem os valores do IBS e da CBS no momento
                                da liquidação financeira da operação, facilitando a efetivação do princípio da não
                                cumulatividade.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(6)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                6</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">O que é a Cesta Básica Nacional de
                                Alimentos?</h3>
                        </div>
                        <svg id="faq-icon-6" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-6" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>A Cesta Básica é um conjunto de produtos alimentícios que terá alíquotas de IBS e CBS
                                reduzidas a zero, visando facilitar o acesso a alimentos essenciais.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(7)"
                        class="w-full flex items-center justify-center p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                7</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Como funcionará o cashback na Reforma
                                Tributária?</h3>
                        </div>
                        <svg id="faq-icon-7" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-7" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>O cashback permitirá a devolução de valores de IBS e CBS a pessoas físicas em situações
                                específicas, com o objetivo de reduzir desigualdades de renda.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(8)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                8</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Quando as mudanças da Reforma Tributária
                                entrarão em vigor?</h3>
                        </div>
                        <svg id="faq-icon-8" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-8" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>As mudanças ocorrerão gradualmente entre 2026 e 2033, com a extinção de tributos e a
                                implementação dos novos. Acompanhe a linha do tempo para entender as datas específicas.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(9)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                9</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Como posso me manter informado sobre a
                                tramitação do Projeto de Lei Complementar nº 108/2024?</h3>
                        </div>
                        <svg id="faq-icon-9" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-9" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p>Você pode acompanhar a tramitação acessando o site do Congresso Nacional. Utilize o QR
                                Code disponível na cartilha para facilitar o acesso.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                    <button onclick="toggleFAQ(10)"
                        class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold">
                                10</div>
                            <h3 class="text-lg font-bold text-gray-900 pr-4">Onde posso buscar mais informações sobre
                                a Reforma Tributária?</h3>
                        </div>
                        <svg id="faq-icon-10" xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-brand-orange flex-shrink-0 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-10" class="hidden px-6 pb-6">
                        <div class="pl-12 text-gray-600 leading-relaxed">
                            <p class="mb-3">Para mais detalhes, entre em contato com a JP Contábil ou consulte a
                                cartilha disponibilizada pela Secretaria da Fazenda.</p>
                            <p class="font-semibold text-brand-blue">Quer saber mais? Fale com a JP Contábil para
                                esclarecer suas dúvidas e se manter atualizado sobre as mudanças que impactarão seu
                                negócio!</p>
                        </div>
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
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">
                                    Horário
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
                <div class="pt-8 border-t border-brand-orange/20 w-full max-w-6xl text-center mx-auto">
                    <p class="text-sm text-white/70">
                        © {{ date('Y') }} Todos os direitos reservados
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal JavaScript -->
    <script>
        function openModal(year) {
            const modalId = `modal-${year}`;
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(year) {
            const modalId = `modal-${year}`;
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside content
        document.addEventListener('click', function(event) {
            if (event.target.classList && event.target.classList.contains('modal-overlay')) {
                event.target.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('.modal-overlay');
                modals.forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

        // FAQ Toggle Function
        function toggleFAQ(number) {
            const answer = document.getElementById(`faq-answer-${number}`);
            const icon = document.getElementById(`faq-icon-${number}`);

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>

</html>
