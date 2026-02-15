<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="transition-colors duration-300">
<head>
    @include('partials.header')
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-slate-900 dark:text-gray-100 antialiased">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-white/80 dark:bg-slate-900/80 border-b border-gray-200/50 dark:border-slate-700/50">
        @include('partials.navbar')
    </header>

    <!-- Main Navigation -->
    <nav class="bg-gradient-to-r from-indigo-600 via-purple-600 to-violet-600 text-white shadow-lg">
        @include('partials.main-menu')
    </nav>

    <!-- Breadcrumb -->
    @hasSection('breadcrumb')
        <div class="bg-gray-100/50 dark:bg-slate-800/50 py-3">
            <div class="container mx-auto px-4">
                @yield('breadcrumb')
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <main class="container mx-auto py-10 px-4 min-h-screen">
        @if (isset($livewireComponent))
            @livewire($livewireComponent, $livewireParams ?? [])
        @else
            @yield('content')
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-900 to-slate-800 text-gray-300 mt-auto">
        @include('partials.footer')
    </footer>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @livewireScripts

    <!-- Dark mode initialization -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>

    @stack('scripts')
</body>
</html>
