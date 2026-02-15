@extends('layouts.app')

@section('title', 'Gráfico de Acordes Mayores y Menores')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <p class="text-lg text-gray-700 dark:text-gray-300 text-center font-medium mb-6">
        Gráficos de acordes recopilados que te ayudarán a compararlos y memorizarlos fácilmente.
    </p>

    <!-- Resumen de acordes mayores -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4 text-center">
            Resumen de Acordes Mayores de Piano
        </h2>
        <div class="flex justify-center">
            <img src="{{ asset('backend/assets/images/major_chords.jpg') }}" alt="Gráfico de Acordes Mayores" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>
        <p class="text-gray-700 dark:text-gray-300 text-center mt-4">
            Los dedos pueden tocar en cualquier octava del teclado. Tanto la mano izquierda como la derecha pueden tocar el acorde.
        </p>
    </div>

    <!-- Resumen de acordes menores -->
    <div class="mb-8">
        <h2 id="menor" class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">
            Resumen de Acordes Menores de Piano
        </h2>
        <div class="flex justify-center">
            <img src="{{ asset('backend/assets/images/minor_chords.jpg') }}" alt="Gráfico de Acordes Menores" loading="lazy" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>
        <p class="text-gray-700 text-center mt-4">
            Como antes, los dedos pueden tocar en cualquier octava del teclado.
        </p>
    </div>

    <!-- Resumen de acordes séptima dominante -->
    <div class="mb-8">
        <h2 id="septima-dominante" class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">
            Resumen de Acordes de Séptima Dominante de Piano
        </h2>
        <div class="flex justify-center">
            <img src="{{ asset('backend/assets/images/seventh_chords.jpg') }}" alt="Gráfico de Acordes de Séptima Dominante" loading="lazy" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>
        <p class="text-gray-700 text-center mt-4">
            Como los anteriores, estos acordes pueden tocarse con cualquier mano en cualquier octava del teclado.
        </p>
    </div>

    <!-- Enlace a notas del teclado -->
    <div class="text-center mt-8">
        <a href="{{ route('pages.notas-del-teclado') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también Notas sobre el Teclado &#8250;
        </a>
    </div>
</div>
@endsection
