<div x-data="{ darkMode: @js($isDark) }"
     x-init="if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) { darkMode = true; } else { darkMode = false; }
     $watch('darkMode', (value) => { localStorage.setItem('theme', value ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', value); });
     if (localStorage.getItem('theme') === 'dark') { document.documentElement.classList.add('dark'); }"
     @dark-mode-toggled.window="darkMode = $event.detail.isDark; document.documentElement.classList.toggle('dark', darkMode);"
     class="relative">

    <button @click="$wire.toggle(); darkMode = !darkMode; document.documentElement.classList.toggle('dark', darkMode)"
            class="relative inline-flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 focus:outline-none"
            :class="darkMode ? 'bg-amber-500/20 hover:bg-amber-500/30' : 'bg-indigo-500/20 hover:bg-indigo-500/30'"
            title="{{ $isDark ? 'Cambiar a modo claro' : 'Cambiar a modo oscuro' }}">

        <!-- Sun Icon (Light Mode) -->
        <svg x-show="!darkMode"
             xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-indigo-400 transition-transform duration-300 hover:rotate-45"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>

        <!-- Moon Icon (Dark Mode) -->
        <svg x-show="darkMode"
             xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-amber-400 transition-transform duration-300 hover:scale-110"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>

        <!-- Animated ring effect -->
        <span class="absolute inset-0 rounded-full animate-pulse"
              :class="darkMode ? 'bg-amber-500/10' : 'bg-indigo-500/10'"
              x-show="darkMode || !darkMode"></span>
    </button>
</div>
