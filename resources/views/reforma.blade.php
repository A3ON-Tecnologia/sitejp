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
        <section
            class="relative px-6 min-h-screen flex items-start justify-center overflow-hidden pt-32 border-b-4 border-brand-orange">
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
        <section class="timeline-section py-8 px-6 bg-zinc-50 dark:bg-zinc-900 sticky top-20 z-40 shadow-md">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center gap-4">
                    <button onclick="scrollToSection(0)" id="btn-2025"
                        class="timeline-btn active px-8 py-4 rounded-lg font-bold bg-brand-orange text-brand-blue transition-all duration-300 hover:scale-105 hover:shadow-lg border-2 border-brand-blue">
                        2025
                    </button>
                    <button onclick="scrollToSection(1)" id="btn-2026"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold bg-brand-orange text-brand-blue transition-all duration-300 hover:scale-105 hover:shadow-lg border-2 border-brand-blue">
                        2026
                    </button>
                    <button onclick="scrollToSection(2)" id="btn-2027"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold bg-brand-orange text-brand-blue transition-all duration-300 hover:scale-105 hover:shadow-lg border-2 border-brand-blue">
                        2027
                    </button>
                    <button onclick="scrollToSection(3)" id="btn-2028"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold bg-brand-orange text-brand-blue transition-all duration-300 hover:scale-105 hover:shadow-lg border-2 border-brand-blue">
                        2028-2029
                    </button>
                    <button onclick="scrollToSection(4)" id="btn-2030"
                        class="timeline-btn px-8 py-4 rounded-lg font-bold bg-brand-orange text-brand-blue transition-all duration-300 hover:scale-105 hover:shadow-lg border-2 border-brand-blue">
                        2030-2033
                    </button>
                </div>
            </div>
        </section>

        <!-- Carousel Section -->
        <section id="carousel-container" class="overflow-hidden sticky z-30 bg-page-bg dark:bg-zinc-950">
            <div class="carousel-wrapper flex transition-transform duration-500 ease-in-out" id="carousel-wrapper">
                <!-- Slide 2025 -->
                <div class="carousel-slide flex-shrink-0 w-screen" data-slide="0">
                    <div class="container mx-auto max-w-6xl px-6 py-16">
                        <h2 class="text-5xl font-bold text-brand-orange mb-4 text-center"
                            style="font-family: 'Raleway', sans-serif;">2025</h2>
                        <h3 class="text-2xl font-semibold text-brand-blue mb-12 text-center"
                            style="font-family: 'Raleway', sans-serif;">O que muda</h3>

                        <div class="bg-white dark:bg-zinc-800 rounded-2xl p-10 shadow-2xl border-4 border-brand-orange">
                            <!-- Main Title -->
                            <div class="mb-8 pb-6 border-b-2 border-brand-orange/30">
                                <h4 class="text-3xl font-bold text-brand-blue mb-2 text-center"
                                    style="font-family: 'Raleway', sans-serif;">
                                    Início do Projeto Piloto
                                </h4>
                                <p class="text-xl text-brand-orange font-semibold text-center">
                                    📅 Início oficial em <span class="text-2xl">07/07/2025</span>
                                </p>
                            </div>

                            <!-- Content Grid -->
                            <div class="space-y-6">
                                <!-- NFe adaptada -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-3 flex items-center gap-2">
                                        <span class="text-2xl">📄</span>
                                        NFe adaptada (CBS/IBS/IS)
                                    </h5>
                                    <p class="text-base text-zinc-700 dark:text-zinc-300 ml-8">
                                        Liberação do modelo 55 com <span class="font-semibold text-brand-blue">CST
                                            0000</span> e <span class="font-semibold text-brand-blue">cClassTrib
                                            000001</span>
                                    </p>
                                </div>

                                <!-- Apuração Assistida -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-3 flex items-center gap-2">
                                        <span class="text-2xl">🧮</span>
                                        Apuração Assistida (AA)
                                    </h5>
                                    <p class="text-base text-zinc-700 dark:text-zinc-300 ml-8">
                                        Processamento automático de débitos e créditos da CBS
                                    </p>
                                </div>

                                <!-- Simuladores -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-3 flex items-center gap-2">
                                        <span class="text-2xl">🔧</span>
                                        Simuladores (DFe e Pagamentos)
                                    </h5>
                                    <p class="text-base text-zinc-700 dark:text-zinc-300 ml-8">
                                        Emissão de NFe e DARF de teste
                                    </p>
                                </div>

                                <!-- Split Payment -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-3 flex items-center gap-2">
                                        <span class="text-2xl">💳</span>
                                        Split Payment
                                    </h5>
                                    <p class="text-base text-zinc-700 dark:text-zinc-300 ml-8">
                                        Recurso definido, mas <span class="font-semibold text-brand-orange">ainda não
                                            disponível para testes</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Footer Note -->
                            <div class="mt-8 pt-6 border-t-2 border-brand-orange/30">
                                <p class="text-sm text-center text-zinc-500 dark:text-zinc-400 italic">
                                    ⚠️ Fase inicial de testes e adaptação dos sistemas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2026 -->
                <div class="carousel-slide flex-shrink-0 w-screen" data-slide="1">
                    <div class="container mx-auto max-w-6xl px-6 py-16">
                        <h2 class="text-5xl font-bold text-brand-orange mb-4 text-center"
                            style="font-family: 'Raleway', sans-serif;">2026</h2>
                        <h3 class="text-2xl font-semibold text-brand-blue mb-12 text-center"
                            style="font-family: 'Raleway', sans-serif;">O que muda</h3>

                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl p-10 shadow-2xl border-4 border-brand-orange">
                            <!-- Main Title -->
                            <div class="mb-8 pb-6 border-b-2 border-brand-orange/30">
                                <h4 class="text-3xl font-bold text-brand-blue mb-2 text-center"
                                    style="font-family: 'Raleway', sans-serif;">
                                    Entrada em Vigor das Primeiras Mudanças
                                </h4>
                                <p class="text-xl text-brand-orange font-semibold text-center">
                                    📅 Vigência a partir de <span class="text-2xl">01/01/2026</span>
                                </p>
                            </div>

                            <!-- Content Grid -->
                            <div class="space-y-6">
                                <!-- NFe / NFCe -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">📋</span>
                                        NFe / NFCe
                                    </h5>
                                    <div class="ml-8 space-y-2">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            <span class="font-semibold text-brand-orange">✓</span> As NFe/NFCe passam a
                                            ser <span class="font-bold text-brand-blue">confissão de dívida</span>
                                        </p>
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            <span class="font-semibold text-brand-orange">✓</span> Proibição de NFCe
                                            para pessoa jurídica
                                        </p>
                                    </div>
                                </div>

                                <!-- Nota Fiscal de Serviços -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">📝</span>
                                        Nota Fiscal de Serviços
                                    </h5>
                                    <div class="ml-8 space-y-2">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            <span class="font-semibold text-brand-orange">✓</span> Padrão Nacional da
                                            Nota fiscal de Serviços
                                        </p>
                                    </div>
                                </div>

                                <!-- CIB obrigatório -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🔐</span>
                                        CIB obrigatório
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Entra em Vigor a partir de <span
                                                class="font-bold text-brand-blue">01/01/2026</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Piloto da Reforma -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🧪</span>
                                        Piloto da Reforma
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Testes até <span class="font-bold text-brand-orange">31/12/2026</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Novos CST/cClassTrib -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🔢</span>
                                        Novos CST/cClassTrib
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Expansão dos cenários tributários
                                        </p>
                                    </div>
                                </div>

                                <!-- Split Payment -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💳</span>
                                        Split Payment
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Preparação ampliada
                                        </p>
                                    </div>
                                </div>

                                <!-- CNPJ Alfanumérico -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🔤</span>
                                        CNPJ Alfanumérico
                                    </h5>
                                    <div class="ml-8 space-y-2">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            <span class="font-semibold text-brand-orange">A partir de Julho
                                                2026:</span>
                                        </p>
                                        <p class="text-base text-zinc-700 dark:text-zinc-300 pl-4">
                                            Quem já está inscrito no CNPJ permanecerá com o seu número válido
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Note -->
                            <div class="mt-8 pt-6 border-t-2 border-brand-orange/30">
                                <p class="text-sm text-center text-zinc-500 dark:text-zinc-400 italic">
                                    ⚠️ Ano de transição e adaptação aos novos padrões
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2027 -->
                <div class="carousel-slide flex-shrink-0 w-screen" data-slide="2">
                    <div class="container mx-auto max-w-6xl px-6 py-16">
                        <h2 class="text-5xl font-bold text-brand-orange mb-4 text-center"
                            style="font-family: 'Raleway', sans-serif;">2027</h2>
                        <h3 class="text-2xl font-semibold text-brand-blue mb-12 text-center"
                            style="font-family: 'Raleway', sans-serif;">O que muda</h3>

                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl p-10 shadow-2xl border-4 border-brand-orange">
                            <!-- Main Title -->
                            <div class="mb-8 pb-6 border-b-2 border-brand-orange/30">
                                <h4 class="text-3xl font-bold text-brand-blue mb-2 text-center"
                                    style="font-family: 'Raleway', sans-serif;">
                                    Início da Transição Efetiva
                                </h4>
                                <p class="text-xl text-brand-orange font-semibold text-center">
                                    🚀 Primeiro ano de cobrança e convivência entre sistemas
                                </p>
                            </div>

                            <!-- Content Grid -->
                            <div class="space-y-6">
                                <!-- Split Payment -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💳</span>
                                        Split Payment
                                    </h5>
                                    <div class="ml-8 space-y-3">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            <span class="font-semibold text-brand-orange">Início da implementação
                                                progressiva:</span>
                                        </p>
                                        <ul class="space-y-2 pl-4">
                                            <li class="text-base text-zinc-700 dark:text-zinc-300">
                                                <span class="text-brand-orange mr-2">•</span>
                                                O modelo de segregação automática do valor do tributo na liquidação
                                                financeira começa a ser ativado em etapas
                                            </li>
                                            <li class="text-base text-zinc-700 dark:text-zinc-300">
                                                <span class="text-brand-orange mr-2">•</span>
                                                A implementação ocorre de modo gradual, com foco em setores e meios de
                                                pagamento preparados
                                            </li>
                                            <li class="text-base text-zinc-700 dark:text-zinc-300">
                                                <span class="text-brand-orange mr-2">•</span>
                                                A tecnologia e os operadores financeiros começam a entrar no ambiente de
                                                conformidade real
                                            </li>
                                            <li class="text-base text-zinc-700 dark:text-zinc-300">
                                                <span class="text-brand-orange mr-2">•</span>
                                                <span class="font-bold text-brand-blue">Não há obrigatoriedade plena
                                                    para todos os contribuintes</span>
                                            </li>
                                            <li class="text-base text-zinc-700 dark:text-zinc-300">
                                                <span class="text-brand-orange mr-2">•</span>
                                                Não é a fase "universal" do split — essa entra mais adiante na transição
                                                do IVA dual
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Início da Cobrança da CBS -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">📊</span>
                                        Início da Cobrança da CBS (parcial)
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Começa a cobrança da CBS com <span
                                                class="font-bold text-brand-blue">alíquota reduzida</span>, fase
                                            inicial
                                            da transição
                                        </p>
                                    </div>
                                </div>

                                <!-- Redução gradual de PIS/COFINS -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">📉</span>
                                        Redução gradual de PIS/COFINS
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            PIS e COFINS começam a ser <span
                                                class="font-bold text-brand-orange">substituídos
                                                parcialmente pela CBS</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Primeiro ano de convivência -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🔄</span>
                                        Primeiro ano de convivência real entre sistemas
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Operações passam a ter <span class="font-bold text-brand-blue">efeitos
                                                financeiros simultâneos</span> no modelo antigo e no novo
                                        </p>
                                    </div>
                                </div>

                                <!-- Ampliação da base de creditamento -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💰</span>
                                        Ampliação da base de creditamento
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Crédito da CBS passa a seguir a <span
                                                class="font-bold text-brand-orange">lógica plena da
                                                não cumulatividade</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Ajuste das alíquotas -->
                                <div
                                    class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">⚖️</span>
                                        Ajuste das alíquotas de referência
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            Alíquotas da CBS são <span class="font-bold text-brand-blue">recalibradas
                                                com base na arrecadação real</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Transição federativa -->
                                <div
                                    class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                    <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                        <span class="text-2xl">🏛️</span>
                                        Transição federativa para o IBS
                                    </h5>
                                    <div class="ml-8">
                                        <p class="text-base text-zinc-700 dark:text-zinc-300">
                                            União inicia a <span class="font-bold text-brand-orange">transferência
                                                progressiva das receitas do ICMS/ISS para o IBS</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Note -->
                            <div class="mt-8 pt-6 border-t-2 border-brand-orange/30">
                                <p class="text-sm text-center text-zinc-500 dark:text-zinc-400 italic">
                                    ⚠️ Ano crucial de transição - convivência entre sistema antigo e novo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2028-2029 -->
                <div class="carousel-slide flex-shrink-0 w-screen" data-slide="3">
                    <div class="container mx-auto max-w-6xl px-6 py-16">
                        <h2 class="text-5xl font-bold text-brand-orange mb-4 text-center"
                            style="font-family: 'Raleway', sans-serif;">2028-2029</h2>
                        <h3 class="text-2xl font-semibold text-brand-blue mb-12 text-center"
                            style="font-family: 'Raleway', sans-serif;">O que muda</h3>

                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl p-10 shadow-2xl border-4 border-brand-orange">
                            <!-- Main Title -->
                            <div class="mb-8 pb-6 border-b-2 border-brand-orange/30">
                                <h4 class="text-3xl font-bold text-brand-blue mb-2 text-center"
                                    style="font-family: 'Raleway', sans-serif;">
                                    Pico da Transição
                                </h4>
                                <p class="text-xl text-brand-orange font-semibold text-center">
                                    ⚡ Período de maior complexidade operacional
                                </p>
                            </div>

                            <!-- 2028 Section -->
                            <div class="mb-10">
                                <div class="bg-brand-blue/10 rounded-xl p-6 mb-6">
                                    <h4 class="text-2xl font-bold text-brand-blue text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        📅 2028
                                    </h4>
                                </div>

                                <div class="space-y-6">
                                    <!-- CBS em alíquota cheia -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">💯</span>
                                            CBS em alíquota cheia
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                A CBS deixa a fase de alíquota reduzida e passa a ser cobrada em sua
                                                <span class="font-bold text-brand-blue">alíquota plena</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Redução adicional do PIS/COFINS -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">📉</span>
                                            Redução adicional do PIS/COFINS
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Avança a <span class="font-bold text-brand-orange">substituição
                                                    definitiva de PIS e COFINS pela CBS</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Expansão do Split Payment -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">💳</span>
                                            Expansão do Split Payment
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                O Split Payment amplia o escopo de aplicação, cobrindo <span
                                                    class="font-bold text-brand-blue">setores e meios de pagamento
                                                    adicionais</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- IBS em fase de teste ampliada -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🧪</span>
                                            IBS em fase de teste ampliada
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Estados e Municípios avançam na <span
                                                    class="font-bold text-brand-orange">unificação operacional do IBS
                                                    em ambiente de transição</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Transição federativa aprofundada -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🏛️</span>
                                            Transição federativa aprofundada
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Maior parcela do ICMS/ISS migra para o IBS, conforme <span
                                                    class="font-bold text-brand-blue">cronograma de repartição</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Consolidação da não cumulatividade plena -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🔗</span>
                                            Consolidação da não cumulatividade plena
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                O sistema CBS/IBS passa a refletir, em escala maior, o <span
                                                    class="font-bold text-brand-orange">modelo de crédito financeiro
                                                    universal</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2029 Section -->
                            <div>
                                <div class="bg-brand-orange/10 rounded-xl p-6 mb-6">
                                    <h4 class="text-2xl font-bold text-brand-blue text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        📅 2029
                                    </h4>
                                    <p class="text-center text-brand-orange font-semibold">
                                        Ano com maior complexidade operacional
                                    </p>
                                </div>

                                <div class="space-y-6">
                                    <!-- Integração total dos DF-e -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">📄</span>
                                            Integração total dos DF-e com o IVA Dual
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Documentos fiscais eletrônicos passam a rodar majoritariamente já no
                                                <span class="font-bold text-brand-blue">modelo CBS/IBS/IS</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Ambiente fiscal híbrido -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">⚠️</span>
                                            Ambiente fiscal híbrido (pico da transição)
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                2029 é o ano com <span class="font-bold text-brand-orange">maior
                                                    complexidade operacional</span>: convivem ICMS/ISS + IBS e
                                                PIS/COFINS residuais + CBS plena
                                            </p>
                                        </div>
                                    </div>

                                    <!-- IBS inicia cobrança -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🚀</span>
                                            IBS inicia cobrança com alíquota reduzida
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Começa a cobrança do IBS em fase inicial, com <span
                                                    class="font-bold text-brand-blue">alíquota reduzida</span>, dando
                                                início à convivência real entre ICMS/ISS e IBS
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Redução proporcional de ICMS e ISS -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">📊</span>
                                            Redução proporcional de ICMS e ISS
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Parte da arrecadação do ICMS/ISS começa a ser <span
                                                    class="font-bold text-brand-orange">progressivamente substituída
                                                    pelo IBS</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- CBS totalmente implantada -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">✅</span>
                                            CBS totalmente implantada
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                A CBS já opera em <span class="font-bold text-brand-blue">regime
                                                    pleno</span>, substituindo PIS/COFINS, consolidando a etapa federal
                                                do IVA dual
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Split Payment em expansão avançada -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">💳</span>
                                            Split Payment em expansão avançada
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                O Split Payment amplia sua aplicação para um número maior de setores e
                                                operações, <span class="font-bold text-brand-orange">aproximando-se da
                                                    adoção plena</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Transição federativa intensificada -->
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-6 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🏛️</span>
                                            Transição federativa intensificada
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                Receitas estaduais e municipais passam a migrar de maneira <span
                                                    class="font-bold text-brand-blue">mais acelerada para o Comitê
                                                    Gestor do IBS</span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Aprimoramento da não cumulatividade -->
                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-6 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-xl font-bold text-brand-blue mb-4 flex items-center gap-2">
                                            <span class="text-2xl">🔗</span>
                                            Aprimoramento da não cumulatividade
                                        </h5>
                                        <div class="ml-8">
                                            <p class="text-base text-zinc-700 dark:text-zinc-300">
                                                O compartilhamento de créditos entre CBS e IBS começa a refletir a
                                                <span class="font-bold text-brand-orange">lógica integrada do IVA
                                                    dual</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Note -->
                            <div class="mt-8 pt-6 border-t-2 border-brand-orange/30">
                                <p class="text-sm text-center text-zinc-500 dark:text-zinc-400 italic">
                                    ⚠️ Período crítico: convivência plena entre sistemas antigo e novo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2030-2033 -->
                <div class="carousel-slide flex-shrink-0 w-screen" data-slide="4">
                    <div class="container mx-auto max-w-6xl px-6 py-16">
                        <h2 class="text-5xl font-bold text-brand-orange mb-4 text-center"
                            style="font-family: 'Raleway', sans-serif;">2030-2033</h2>
                        <h3 class="text-2xl font-semibold text-brand-blue mb-12 text-center"
                            style="font-family: 'Raleway', sans-serif;">O que muda</h3>

                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl p-10 shadow-2xl border-4 border-brand-orange">
                            <!-- Main Title -->
                            <div class="mb-8 pb-6 border-b-2 border-brand-orange/30">
                                <h4 class="text-3xl font-bold text-brand-blue mb-2 text-center"
                                    style="font-family: 'Raleway', sans-serif;">
                                    Conclusão da Reforma
                                </h4>
                                <p class="text-xl text-brand-orange font-semibold text-center">
                                    🎯 Implantação definitiva do IVA Dual
                                </p>
                            </div>

                            <!-- 2030 Section -->
                            <div class="mb-10">
                                <div
                                    class="bg-gradient-to-r from-brand-blue/20 to-brand-orange/20 rounded-xl p-6 mb-6">
                                    <h4 class="text-2xl font-bold text-brand-blue text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        📅 2030
                                    </h4>
                                </div>

                                <div class="space-y-5">
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">📈</span>
                                            IBS com alíquota crescente
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            O IBS aumenta sua participação, reduzindo ainda mais ICMS e ISS
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">🔄</span>
                                            Aprimoramento do modelo dual (CBS + IBS)
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            CBS plena + IBS crescente formam o núcleo do IVA brasileiro
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">📉</span>
                                            Redução significativa de ICMS e ISS
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Estados e municípios iniciam dependência menor do modelo antigo
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">💳</span>
                                            Split Payment quase universal
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Mecanismo atinge grande parte das operações de pagamento
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">🔗</span>
                                            Harmonização dos créditos entre CBS e IBS
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Modelo de crédito financeiro totalmente consolidado
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">📄</span>
                                            Integração avançada dos DF-e
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Todos os documentos fiscais operam praticamente só no modelo CBS/IBS
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2031 Section -->
                            <div class="mb-10">
                                <div
                                    class="bg-gradient-to-r from-brand-orange/20 to-brand-blue/20 rounded-xl p-6 mb-6">
                                    <h4 class="text-2xl font-bold text-brand-blue text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        📅 2031
                                    </h4>
                                </div>

                                <div class="space-y-5">
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">📈</span>
                                            IBS em nova fase de aumento gradual
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            IBS segue crescendo conforme o cronograma anual
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">📉</span>
                                            Queda acentuada de ICMS e ISS
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Antigos tributos sobre consumo se tornam residuais
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">👁️</span>
                                            Transparência tributária fortalecida
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Nota fiscal evidencia completamente CBS, IBS e IS
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">💳</span>
                                            Split Payment em plena expansão funcional
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Aplicação quase total no varejo, serviços e pagamentos digitais
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">🏛️</span>
                                            Integração federativa consolidada
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Comitê Gestor do IBS assume praticamente toda a coordenação
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">✨</span>
                                            Simplificação operacional máxima
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Ambiente fiscal opera majoritariamente em lógica de IVA
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2032 Section -->
                            <div class="mb-10">
                                <div
                                    class="bg-gradient-to-r from-brand-blue/20 to-brand-orange/20 rounded-xl p-6 mb-6">
                                    <h4 class="text-2xl font-bold text-brand-blue text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        📅 2032
                                    </h4>
                                </div>

                                <div class="space-y-5">
                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">🎯</span>
                                            IBS próximo da alíquota final
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            IBS chega perto de sua participação definitiva no modelo
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">🔚</span>
                                            Fim funcional de ICMS e ISS
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Tributos antigos tornam-se mínimos, restando situações residuais
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">✅</span>
                                            Modelo de IVA praticamente completo
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            CBS + IBS passam a representar quase toda tributação do consumo
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-orange/5 to-brand-blue/5 rounded-xl p-5 border-l-4 border-brand-orange hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">💳</span>
                                            Split Payment totalmente difundido
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Praticamente todas as operações financeiras utilizam o mecanismo
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-brand-blue/5 to-brand-orange/5 rounded-xl p-5 border-l-4 border-brand-blue hover:shadow-lg transition-shadow duration-300">
                                        <h5 class="text-lg font-bold text-brand-blue mb-3 flex items-center gap-2">
                                            <span class="text-xl">⚖️</span>
                                            Estabilização da arrecadação
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Ajustes finais das alíquotas de equilíbrio federativo
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2033 Section - Final -->
                            <div>
                                <div
                                    class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-xl p-6 mb-6 border-2 border-green-500/30">
                                    <h4 class="text-2xl font-bold text-green-700 dark:text-green-400 text-center mb-2"
                                        style="font-family: 'Raleway', sans-serif;">
                                        🎉 2033 - CONCLUSÃO DA REFORMA
                                    </h4>
                                    <p class="text-center text-green-600 dark:text-green-300 font-semibold">
                                        Implantação definitiva do novo sistema tributário
                                    </p>
                                </div>

                                <div class="space-y-5">
                                    <div
                                        class="bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-5 border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">🎯</span>
                                            IBS atinge alíquota cheia e definitiva
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            <span class="font-bold text-green-600 dark:text-green-400">Conclusão da
                                                transição</span>; IBS substitui integralmente ICMS/ISS
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-emerald-50 to-green-50 dark:from-emerald-900/20 dark:to-green-900/20 rounded-xl p-5 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">✅</span>
                                            Fim completo de ICMS, ISS, PIS e COFINS
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            <span class="font-bold text-green-600 dark:text-green-400">Antigos
                                                tributos sobre consumo são encerrados</span>
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-5 border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">🏆</span>
                                            IVA dual plenamente implantado
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            CBS e IBS passam a ser os <span
                                                class="font-bold text-green-600 dark:text-green-400">únicos tributos
                                                sobre consumo</span>
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-emerald-50 to-green-50 dark:from-emerald-900/20 dark:to-green-900/20 rounded-xl p-5 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">⚡</span>
                                            Modelo tributário estabilizado
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Ano de funcionamento normal do novo sistema
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-5 border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">💳</span>
                                            Split Payment se torna padrão único
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Todas as liquidações financeiras segregam automaticamente os tributos
                                        </p>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-emerald-50 to-green-50 dark:from-emerald-900/20 dark:to-green-900/20 rounded-xl p-5 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
                                        <h5
                                            class="text-lg font-bold text-green-700 dark:text-green-400 mb-3 flex items-center gap-2">
                                            <span class="text-xl">✨</span>
                                            Ambiente fiscal simplificado
                                        </h5>
                                        <p class="text-sm text-zinc-700 dark:text-zinc-300 ml-7">
                                            Sistema de apuração e conformidade totalmente baseado em crédito financeiro
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Note -->
                            <div class="mt-8 pt-6 border-t-2 border-green-500/30">
                                <p class="text-sm text-center text-green-600 dark:text-green-400 font-bold">
                                    🎊 Reforma Tributária Concluída - Novo Sistema em Pleno Funcionamento
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="carousel-prev" class="carousel-arrow carousel-arrow-left" aria-label="Anterior">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button id="carousel-next" class="carousel-arrow carousel-arrow-right" aria-label="Próximo">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </section>
    </main>

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
</body>

</html>
