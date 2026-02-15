<footer class="relative overflow-hidden">
    <!-- Decorative gradient orb -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">

            <!-- Logo y Descripción -->
            <div class="flex flex-col items-center lg:items-start space-y-4">
                <img src="{{ asset('backend/assets/images/logo.svg') }}" alt="Logo de Piano IPUV" class="h-16 w-auto">
                <p class="text-gray-400 text-center lg:text-left text-sm max-w-xs">
                    Aprende acordes y técnicas de piano de forma interactiva con explicaciones detalladas.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="hidden lg:flex justify-center">
                <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Inicio</a>
                    <a href="{{ route('pages.mapa-del-sitio') }}" class="text-gray-400 hover:text-white transition-colors">Mapa del Sitio</a>
                    <a href="{{ route('pages.acerca') }}" class="text-gray-400 hover:text-white transition-colors">Acerca</a>
                    <a href="{{ route('pages.buscador-de-acordes') }}" class="text-gray-400 hover:text-white transition-colors">Buscador</a>
                </div>
            </div>

            <!-- Redes Sociales -->
            <div class="flex justify-center lg:justify-end space-x-3">
                <a href="https://www.facebook.com/ipuvorg" target="_blank" rel="noopener noreferrer"
                   class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-700/50 text-gray-400 hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://x.com/ipuvorg" target="_blank" rel="noopener noreferrer"
                   class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-700/50 text-gray-400 hover:bg-sky-500 hover:text-white transition-all duration-300 hover:scale-110">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/ipuvorg" target="_blank" rel="noopener noreferrer"
                   class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-700/50 text-gray-400 hover:bg-pink-500 hover:text-white transition-all duration-300 hover:scale-110">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@ipuvorg" target="_blank" rel="noopener noreferrer"
                   class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-700/50 text-gray-400 hover:bg-white hover:text-black transition-all duration-300 hover:scale-110">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.youtube.com/@ipuvorg" target="_blank" rel="noopener noreferrer"
                   class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-700/50 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 hover:scale-110">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- Barra inferior -->
        <div class="mt-10 pt-6 border-t border-slate-700/50">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
                <p class="text-slate-500 text-sm">
                    Hecho con ❤️ para los músicos de la Iglesia Pentecostal Unida de Venezuela
                </p>
                <p class="text-slate-500 text-sm">
                    Copyright © {{ date('Y') }} <span class="text-indigo-400 font-semibold">PianoIPUV</span> |
                    Desarrollado por: <a href="https://www.codeart.dev/" target="_blank" class="text-amber-400 hover:text-amber-300 transition-colors">CODEART</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop"
            class="hidden fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full shadow-lg shadow-indigo-500/40 flex items-center justify-center hover:scale-110 hover:shadow-xl transition-all duration-300 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTop = document.getElementById('backToTop');
        const footer = document.querySelector('footer');

        window.addEventListener('scroll', function() {
            const footerTop = footer.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (footerTop <= windowHeight) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>
