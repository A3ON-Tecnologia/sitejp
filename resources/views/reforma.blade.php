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
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
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
            <div class="container mx-auto max-w-6xl text-center relative z-10 pt-20 md:pt-32 flex flex-col items-center justify-start min-h-full md:min-h-screen">
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
                    <a href="#carousel-container" class="inline-flex items-center gap-2 md:gap-3 bg-brand-blue text-brand-orange px-6 md:px-12 py-3 md:py-4 rounded-lg font-bold md:text-xl hover:bg-opacity-90 transition-all duration-300 border-2 border-brand-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                        </svg>
                        CONFIRA O CRONOGRAMA
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                        </svg>
                    </a>
                </div>
            </div>
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

                <!-- Address and Map Section -->
                <div class="pt-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                        <!-- Address Information -->
                        <div class="flex flex-col space-y-4">
                            <h3 class="text-2xl font-bold text-brand-orange mb-2 text-center lg:text-left">Localização</h3>
                            
                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border-2 border-brand-orange/30 flex-1">
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">Endereço</p>
                                <p class="text-base text-white font-medium mb-2">JP Contábil</p>
                                <p class="text-sm text-white/80 leading-relaxed">
                                    Av. Irmãos Piccoli, 480<br>
                                    Bairro Centro<br>
                                    Tangará - SC, 89642-000<br>
                                    Brasil
                                </p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border-2 border-brand-orange/30 flex-1">
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">Horário de Funcionamento</p>
                                <p class="text-sm text-white/80">
                                    Segunda a Sexta<br>
                                    <span class="text-white font-medium">08:00 - 18:00</span>
                                </p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border-2 border-brand-orange/30 flex-1">
                                <p class="text-sm text-brand-orange font-semibold uppercase tracking-wide mb-3">Contato</p>
                                <p class="text-sm text-white/80">
                                    Telefone: <span class="text-white font-medium">(49) 9 9135-2070</span><br>
                                    Email: <span class="text-white font-medium">contato@jpcontabil.com.br</span>
                                </p>
                            </div>
                        </div>

                        <!-- Google Maps Embed -->
                        <div class="w-full h-full rounded-xl overflow-hidden border-2 border-brand-orange/30 shadow-lg" style="min-height: 500px;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221.97866256896083!2d-51.2439743189634!3d-27.104058586927575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e15a143f0f4929%3A0xcdbb3ce8d2ae35aa!2sJP%20Cont%C3%A1bil!5e0!3m2!1spt-BR!2sbr!4v1764939313362!5m2!1spt-BR!2sbr" 
                                style="width: 100%; height: 100%; border: none;"
                                allowfullscreen=""
                                loading="lazy"
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

    <!-- Modals for Year Timelines -->
    <!-- Modal 2025 -->
    <div id="modal-2025" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-96 overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2025</h2>
                    <button type="button" onclick="closeModal('2025')" class="text-brand-orange hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p class="text-gray-700">Conteúdo para 2025 será adicionado em breve...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2026 -->
    <div id="modal-2026" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-96 overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2026</h2>
                    <button type="button" onclick="closeModal('2026')" class="text-brand-orange hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p class="text-gray-700">Conteúdo para 2026 será adicionado em breve...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2027 -->
    <div id="modal-2027" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-96 overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2027</h2>
                    <button type="button" onclick="closeModal('2027')" class="text-brand-orange hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p class="text-gray-700">Conteúdo para 2027 será adicionado em breve...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2028/2029 -->
    <div id="modal-2028-2029" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-96 overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2028/2029</h2>
                    <button type="button" onclick="closeModal('2028-2029')" class="text-brand-orange hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p class="text-gray-700">Conteúdo para 2028/2029 será adicionado em breve...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2030-2033 -->
    <div id="modal-2030-2033" class="modal-overlay hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        <div class="modal-content flex items-center justify-center w-full h-full p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-96 overflow-y-auto">
                <div class="sticky top-0 flex justify-between items-center p-6 border-b border-gray-200 bg-brand-blue">
                    <h2 class="text-2xl md:text-3xl font-bold text-brand-orange">Cronograma 2030-2033</h2>
                    <button type="button" onclick="closeModal('2030-2033')" class="text-brand-orange hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <p class="text-gray-700">Conteúdo para 2030-2033 será adicionado em breve...</p>
                </div>
            </div>
        </div>
    </div>

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
    </script>
</body>

</html>
