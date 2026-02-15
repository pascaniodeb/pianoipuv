@extends('layouts.app')

@section('title', 'Acerca de PianoIPUV')

@section('content')
    <div class="container mx-auto px-4 py-12 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-lg shadow-indigo-500/30 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4">
                Acerca de <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">PianoIPUV</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Tu recurso definitivo para aprender acordes de piano de forma interactiva y profesional
            </p>
        </div>

        <!-- Nuestra Historia -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </span>
                    Nuestra Historia
                </h2>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
                    PianoIPUV nació de la necesidad de crear un recurso completo y accesible para músicos de todas las niveles que desean dominar el arte de los acordes de piano.
                </p>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
                    Especialmente diseñado para los músicos de la <span class="font-semibold text-indigo-600 dark:text-indigo-400">Iglesia Pentecostal Unida de Venezuela (IPUV)</span>, nuestra plataforma ha evolucionado para servir a músicos de habla hispana en todo el mundo.
                </p>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                    Creemos que la educación musical debe ser <strong class="text-indigo-600 dark:text-indigo-400">accesible, clara y práctica</strong>, eliminando barreras que dificultan el aprendizaje de la teoría musical.
                </p>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl transform rotate-3 opacity-10"></div>
                <div class="relative bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-800 dark:to-slate-700 rounded-3xl p-8 border border-indigo-100 dark:border-slate-600">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">50+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Acordes</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">17</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Notas</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">9</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Categorías</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">∞</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Progresiones</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Propósito -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-8 md:p-12 mb-16 text-white">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Nuestro Propósito</h2>
                <p class="text-xl leading-relaxed opacity-90">
                    Democratizar el aprendizaje musical proporcionando herramientas visuales e interactivas que hacen que aprender acordes de piano sea <strong>divertido, efectivo y accesible para todos</strong>.
                </p>
            </div>
        </div>

        <!-- Características -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white text-center mb-12">
                Lo que nos hace <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">únicos</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Característica 1 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Diagramas Visuales</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Diagramas de acordes claros y detallados que muestran exactamente qué notas tocar en el teclado.
                    </p>
                </div>

                <!-- Característica 2 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Teoría Musical</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Explicaciones detalladas de cómo se construyen los acordes y por qué funcionan.
                    </p>
                </div>

                <!-- Característica 3 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Digitaciones</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Recomendaciones de digitación para mano izquierda y derecha con ilustraciones.
                    </p>
                </div>

                <!-- Característica 4 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Inversiones</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Aprende todas las inversiones de cada acorde para mayor fluidez en tus acompañamientos.
                    </p>
                </div>

                <!-- Característica 5 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-sky-500 to-cyan-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Búsqueda Rápida</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Encuentra cualquier acorde instantáneamente con nuestro sistema de búsqueda avanzado.
                    </p>
                </div>

                <!-- Característica 6 -->
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Responsive Design</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Accede desde cualquier dispositivo: computadora, tablet o teléfono móvil.
                    </p>
                </div>
            </div>
        </div>

        <!-- Desarrollador -->
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-3xl p-8 md:p-12 mb-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Desarrollado con ❤️ por</h2>

                <!-- Logo codeart -->
                <a href="https://codedart.dev" target="_blank" rel="noopener noreferrer" class="inline-block hover:opacity-80 transition-opacity">
                    <img src="{{ asset('backend/assets/images/logo-codearte.svg') }}" alt="codeart" class="h-32 w-auto mx-auto">
                </a>

                <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed max-w-3xl mx-auto">
                    No construyo solo sitios web; diseño ecosistemas digitales de alto rendimiento. Con más de dos décadas de evolución tecnológica, mi enfoque se centra en transformar problemas complejos en arquitecturas simples, robustas y escalables. Desde la inmediatez de Next.js hasta la potencia concurrente de Go y la transparencia de la Blockchain, cada línea de código es <em class="text-amber-500">"a tu medida"</em>: única, eficiente y con propósito.
                </p>

                <a href="https://codedart.dev" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    Visitar codedart.dev
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>

                <!-- Social Links -->
                <div class="flex justify-center gap-4 mt-8 pt-8 border-t border-gray-200 dark:border-slate-700">
                    <a href="https://www.facebook.com/ipuvorg" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white dark:bg-slate-700 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-md hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/ipuvorg" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white dark:bg-slate-700 rounded-full flex items-center justify-center text-sky-500 hover:bg-sky-500 hover:text-white transition-all duration-300 shadow-md hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/@ipuvorg" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white dark:bg-slate-700 rounded-full flex items-center justify-center text-red-600 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-md hover:scale-110">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contacto -->
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                ¿Tienes <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">preguntas o sugerencias</span>?
            </h2>
            <p class="text-gray-600 dark:text-gray-400 text-lg mb-8 max-w-2xl mx-auto">
                Nos encantaría escucharte. Tu retroalimentación nos ayuda a mejorar y hacer de PianoIPUV una mejor experiencia para todos.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="mailto:contacto@pianoipuv.com" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contáctanos
                </a>
                <a href="{{ route('pages.enlaces') }}" class="inline-flex items-center px-6 py-3 bg-white dark:bg-slate-800 text-gray-700 dark:text-gray-300 font-semibold rounded-xl shadow-lg hover:shadow-xl border border-gray-200 dark:border-slate-600 hover:border-indigo-500 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    Nuestros Enlaces
                </a>
            </div>
        </div>
    </div>
@endsection
