@extends('layouts.app')

@section('title', 'Mapa del Sitio - PianoIPUV')

@section('content')
<div class="container mx-auto px-4 py-12 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <!-- Header -->
    <div class="text-center mb-12">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-lg shadow-indigo-500/30 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
            </svg>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4">
            Mapa del <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Sitio</span>
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400">
            Explora todas las secciones y recursos disponibles en PianoIPUV
        </p>
    </div>

    <!-- Grid de Categorías -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <!-- Inicio -->
        <a href="{{ route('home') }}" class="group p-6 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl hover:shadow-xl transition-all duration-300 border border-indigo-100 dark:border-slate-600 hover:border-indigo-300 dark:hover:border-indigo-500">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Inicio</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Página principal</p>
                </div>
            </div>
        </a>

        <!-- Acerca de -->
        <a href="{{ route('pages.acerca') }}" class="group p-6 bg-gradient-to-br from-amber-50 to-orange-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl hover:shadow-xl transition-all duration-300 border border-amber-100 dark:border-slate-600 hover:border-amber-300 dark:hover:border-amber-500">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Acerca de</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Conoce más sobre nosotros</p>
                </div>
            </div>
        </a>

        <!-- Buscador -->
        <a href="{{ route('pages.buscador-de-acordes') }}" class="group p-6 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl hover:shadow-xl transition-all duration-300 border border-rose-100 dark:border-slate-600 hover:border-rose-300 dark:hover:border-rose-500">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg shadow-rose-500/30 group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors">Buscador</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Encuentra acordes rápidamente</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Categorías de Acordes -->
    <div class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
            <span class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                </svg>
            </span>
            Categorías de Acordes
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <a href="{{ route('pages.acordes-mayores') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">🎹</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Mayores</span>
            </a>
            <a href="{{ route('pages.acordes-menores') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">🎼</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Menores</span>
            </a>
            <a href="{{ route('pages.acordes-septima') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">🎵</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Séptima</span>
            </a>
            <a href="{{ route('pages.acordes-extendidos') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">🎶</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Extendidos</span>
            </a>
            <a href="{{ route('pages.acordes-suspendidos') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">⏸️</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Suspendidos</span>
            </a>
            <a href="{{ route('pages.acordes-disminuidos') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">📉</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Disminuidos</span>
            </a>
            <a href="{{ route('pages.acordes-aumentados') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">📈</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Aumentados</span>
            </a>
            <a href="{{ route('pages.acordes-agregados') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">➕</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Agregados</span>
            </a>
            <a href="{{ route('pages.acordes-alterados') }}" class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:shadow-lg transition-all duration-300 text-center group">
                <span class="text-2xl mb-2 block">🔄</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Alterados</span>
            </a>
            <a href="{{ route('pages.mas-acordes') }}" class="p-4 bg-gradient-to-r from-indigo-100 to-purple-100 dark:from-indigo-900/30 dark:to-purple-900/30 rounded-xl hover:shadow-lg transition-all duration-300 text-center group border border-indigo-200 dark:border-indigo-700">
                <span class="text-2xl mb-2 block">🎯</span>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400 group-hover:text-indigo-800 dark:group-hover:text-indigo-300 transition-colors">Ver Todos</span>
            </a>
        </div>
    </div>

    <!-- Aprender Acordes -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                <span class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </span>
                Aprender Acordes
            </h2>
            <div class="space-y-3">
                <a href="{{ route('pages.tipos-de-acordes') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center text-emerald-600 dark:text-emerald-400">📋</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Tipos de Acordes</span>
                </a>
                <a href="{{ route('pages.construccion-de-acordes') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center text-emerald-600 dark:text-emerald-400">🔧</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Construcción de Acordes</span>
                </a>
                <a href="{{ route('pages.inversiones') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center text-emerald-600 dark:text-emerald-400">🔄</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Inversiones</span>
                </a>
                <a href="{{ route('pages.progresiones') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center text-emerald-600 dark:text-emerald-400">📈</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Progresiones</span>
                </a>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                <span class="w-10 h-10 bg-gradient-to-r from-sky-500 to-cyan-600 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </span>
                Técnica y Práctica
            </h2>
            <div class="space-y-3">
                <a href="{{ route('pages.acordes-a-dos-manos') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-sky-100 dark:bg-sky-900/50 rounded-lg flex items-center justify-center text-sky-600 dark:text-sky-400">🎹</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">Acordes a Dos Manos</span>
                </a>
                <a href="{{ route('pages.movimientos-de-dedos') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-sky-100 dark:bg-sky-900/50 rounded-lg flex items-center justify-center text-sky-600 dark:text-sky-400">👆</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">Digitaciones</span>
                </a>
                <a href="{{ route('pages.ejercicios-de-acordes') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-sky-100 dark:bg-sky-900/50 rounded-lg flex items-center justify-center text-sky-600 dark:text-sky-400">💪</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">Ejercicios</span>
                </a>
                <a href="{{ route('pages.notas-del-teclado') }}" class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-slate-800 rounded-xl hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:shadow-md transition-all duration-300 group">
                    <span class="w-8 h-8 bg-sky-100 dark:bg-sky-900/50 rounded-lg flex items-center justify-center text-sky-600 dark:text-sky-400">🎹</span>
                    <span class="text-gray-700 dark:text-gray-300 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">Notas del Teclado</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Recursos Adicionales -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="p-6 bg-gradient-to-br from-violet-50 to-purple-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                <span class="w-8 h-8 bg-violet-100 dark:bg-violet-900/50 rounded-lg flex items-center justify-center">📖</span>
                Recursos
            </h3>
            <div class="space-y-2">
                <a href="{{ route('pages.notacion') }}" class="block text-gray-600 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-400 transition-colors">• Notación Musical</a>
                <a href="{{ route('pages.simbolos-de-acordes') }}" class="block text-gray-600 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-400 transition-colors">• Símbolos de Acordes</a>
                <a href="{{ route('pages.diagrama-de-acordes') }}" class="block text-gray-600 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-400 transition-colors">• Cómo Leer Diagramas</a>
                <a href="{{ route('pages.voces') }}" class="block text-gray-600 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-400 transition-colors">• Voicings</a>
            </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                <span class="w-8 h-8 bg-orange-100 dark:bg-orange-900/50 rounded-lg flex items-center justify-center">🎨</span>
                Técnicas Avanzadas
            </h3>
            <div class="space-y-2">
                <a href="{{ route('pages.ruptura-de-acordes') }}" class="block text-gray-600 dark:text-gray-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">• Ruptura de Acordes</a>
                <a href="{{ route('pages.sustitucion-de-acordes') }}" class="block text-gray-600 dark:text-gray-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">• Sustitución de Acordes</a>
                <a href="{{ route('pages.resumen-acordes-mayores') }}" class="block text-gray-600 dark:text-gray-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">• Resumen Mayores</a>
                <a href="{{ route('pages.resumen-acordes-menores') }}" class="block text-gray-600 dark:text-gray-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">• Resumen Menores</a>
            </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-rose-50 to-pink-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                <span class="w-8 h-8 bg-rose-100 dark:bg-rose-900/50 rounded-lg flex items-center justify-center">📚</span>
                Contenido Extra
            </h3>
            <div class="space-y-2">
                <a href="{{ route('pages.libros-electronicos') }}" class="block text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors">• Libros Electrónicos</a>
                <a href="{{ route('pages.enlaces') }}" class="block text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors">• Enlaces Útiles</a>
                <a href="{{ route('pages.enlaces') }}" class="block text-gray-600 dark:text-gray-400 hover:text-rose-600 dark:hover:text-rose-400 transition-colors">• Nuestras Redes</a>
            </div>
        </div>
    </div>

    <!-- Notas Musicales (Acceso Directo) -->
    <div class="mb-10">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
            <span class="w-10 h-10 bg-gradient-to-r from-rose-500 to-pink-600 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2z" />
                </svg>
            </span>
            Explorar por Nota
        </h2>
        <div class="flex flex-wrap justify-center gap-3">
            @foreach (['C', 'C#', 'Db', 'D', 'D#', 'Eb', 'E', 'F', 'F#', 'Gb', 'G', 'G#', 'Ab', 'A', 'A#', 'Bb', 'B'] as $nota)
                <a href="{{ route('acorde.principal', ['nota' => strtolower($nota)]) }}"
                   class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-300">
                    {{ $nota }}
                </a>
            @endforeach
        </div>
    </div>

    <!-- Footer Navigation -->
    <div class="border-t border-gray-200 dark:border-slate-700 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="{{ asset('backend/assets/images/logo.svg') }}" alt="Logo" class="h-8 w-auto">
                {{-- <span class="font-bold text-gray-700 dark:text-gray-300">PianoIPUV</span> --}}
            </div>
            <div class="flex gap-6">
                <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Inicio</a>
                <a href="{{ route('pages.acerca') }}" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Acerca de</a>
                <a href="{{ route('pages.enlaces') }}" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contacto</a>
                <a href="{{ route('pages.mapa-del-sitio') }}" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Mapa del Sitio</a>
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-500">
                © {{ date('Y') }} PianoIPUV. Todos los derechos reservados.
            </p>
        </div>
    </div>
</div>
@endsection
