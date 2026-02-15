<nav x-data="{ mobileMenuOpen: false }" class="relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('backend/assets/images/logo.svg') }}" alt="Logo de Piano IPUV" class="h-10 w-auto group-hover:scale-105 transition-transform duration-300">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                   class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                    Inicio
                </a>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200 flex items-center gap-1">
                        Acordes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                         @click.away="open = false"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute left-0 mt-2 w-56 rounded-xl shadow-xl bg-white dark:bg-slate-800 ring-1 ring-black/5 dark:ring-slate-700 overflow-hidden z-50">
                        <div class="py-2">
                            <a href="{{ route('pages.acordes-mayores') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Mayores</a>
                            <a href="{{ route('pages.acordes-menores') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Menores</a>
                            <a href="{{ route('pages.acordes-septima') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes de Séptima</a>
                            <a href="{{ route('pages.acordes-extendidos') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Extendidos</a>
                            <a href="{{ route('pages.acordes-suspendidos') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Suspendidos</a>
                            <a href="{{ route('pages.acordes-disminuidos') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Disminuidos</a>
                            <a href="{{ route('pages.acordes-aumentados') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Acordes Aumentados</a>
                            <hr class="my-2 border-gray-200 dark:border-slate-700">
                            <a href="{{ route('pages.mas-acordes') }}" class="block px-4 py-2.5 text-sm text-indigo-600 dark:text-indigo-400 font-medium hover:bg-gray-50 dark:hover:bg-slate-700/50 transition-colors">Ver todos los acordes →</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pages.inversiones') }}"
                   class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                    Inversiones
                </a>

                <a href="{{ route('pages.buscador-de-acordes') }}"
                   class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                    Buscador
                </a>

                <!-- Premium Button -->
                <a href="#"
                   class="ml-4 px-5 py-2 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 text-white text-sm font-semibold shadow-lg shadow-amber-500/30 hover:shadow-amber-500/50 hover:scale-105 transition-all duration-300 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Premium
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center gap-2">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="inline-flex items-center justify-center p-2 rounded-lg text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden absolute w-full bg-white dark:bg-slate-800 shadow-xl border-t border-gray-200 dark:border-slate-700 z-40">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Inicio</a>
            <a href="{{ route('pages.acordes-mayores') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Mayores</a>
            <a href="{{ route('pages.acordes-menores') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Menores</a>
            <a href="{{ route('pages.acordes-septima') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes de Séptima</a>
            <a href="{{ route('pages.acordes-extendidos') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Extendidos</a>
            <a href="{{ route('pages.acordes-suspendidos') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Suspendidos</a>
            <a href="{{ route('pages.acordes-disminuidos') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Disminuidos</a>
            <a href="{{ route('pages.acordes-aumentados') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acordes Aumentados</a>
            <a href="{{ route('pages.inversiones') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Inversiones</a>
            <a href="{{ route('pages.buscador-de-acordes') }}" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Buscador</a>
            <hr class="my-3 border-gray-200 dark:border-slate-700">
            <a href="#"
               class="block px-4 py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-500 text-white text-center font-semibold shadow-lg shadow-amber-500/30">
                🎵 Zona Premium
            </a>
        </div>
    </div>
</nav>
