@extends('layouts.app')

@section('title', 'Acordes Alterados')

@section('content')
<div class="px-4 md:px-8 lg:px-16 mt-8">
    <!-- Encabezado -->
    <h1
        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>
    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8">
        Los acordes alterados son una categoría especial de acordes que, como su nombre lo indica, modifican otros acordes. Por ejemplo, existen acordes dominantes alterados séptimos con una quinta disminuida o una quinta aumentada, como
        <span class="font-semibold text-primary dark:text-blue-400">7-5</span> y <span class="font-semibold text-primary dark:text-blue-400">7+5</span>.
    </p>

    <!-- Diagramas de acordes -->
    <h2 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">Diagramas de acordes alterados:</h2>

    <div class="flex flex-wrap justify-center gap-4 mt-8 mb-4">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '7-5']) }}"
                class="block text-center py-2 px-4 bg-primary text-white font-semibold rounded-lg hover:bg-secondary transition duration-300">
                {{ $nota }}7-5
            </a>
        @endforeach
    </div>
    <div class="flex flex-wrap justify-center gap-4 mb-4">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '7+5']) }}"
                class="block text-center py-2 px-4 bg-primary text-white font-semibold rounded-lg hover:bg-secondary transition duration-300">
                {{ $nota }}7+5
            </a>
        @endforeach
    </div>

    <div class="bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md p-4 mb-8">
        <h2 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Los acordes alterados se utilizan para añadir variedad armónica y crear tensión en progresiones. A continuación, se presenta una comparación entre un acorde dominante séptimo estándar y sus variantes alteradas.
        </p>

        <!-- Comparación entre acordes alterados -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Comparación entre C7 y sus variantes alteradas:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7:</span> C – E – G – Bb</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7-5 (C7b5):</span> C – E – Gb – Bb</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7+5 (C7#5):</span> C – E – G# – Bb</li>
            </ul>
        </div>

        <!-- Comparación con otras variantes -->
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-4 mb-4">Comparación con otras variantes:</h4>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7:</span> C – E – G – Bb</li>
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7-9 (C7b9):</span> C – E – G – Bb – Db</li>
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C7+9 (C7#9):</span> C – E – G – Bb – D#</li>
        </ul>
        <p class="text-gray-700 dark:text-gray-300 text-md mt-2">
            Los nombres de estos acordes incluyen las designaciones "bemol novena" y "sostenido novena". Por ejemplo, C7-9 también se escribe como C7b9.
        </p>

        <!-- Otros acordes alterados -->
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-4 mb-4">Otros acordes alterados:</h4>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C9#11:</span> C – E – G – Bb – D – F#</li>
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C13b9:</span> C – E – G – Bb – Db – F – A</li>
            <li><span class="font-semibold text-gray-700 dark:text-gray-300">C13#11:</span> C – E – G – Bb – D – F# – A</li>
        </ul>
        <p class="text-gray-700 dark:text-gray-300 text-md">
            Para más información, puedes consultar <a href="{{ route('pages.sustitucion-de-acordes') }}" class="text-primary dark:text-blue-400 hover:underline">Acordes alterados como sustituciones</a> o
            <a href="https://es.wikipedia.org/wiki/Alteraci%C3%B3n_(m%C3%BAsica)"
                class="text-primary dark:text-blue-400 hover:underline"
                target="_blank"
                rel="noopener noreferrer">
                Acordes alterados en Wikipedia
            </a>
        </p>
    </div>
    <!-- Categorías de acordes -->
    <div class="mt-12 text-center">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 text-center mb-6">Categorías de Acordes</h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ([
                'pages.acordes-mayores' => 'Acordes Mayores',
                'pages.acordes-menores' => 'Acordes Menores',
                'pages.acordes-septima' => 'Acordes de Séptima',
                'pages.acordes-extendidos' => 'Acordes Extendidos',
                'pages.acordes-suspendidos' => 'Acordes Suspendidos',
                'pages.acordes-disminuidos' => 'Acordes Disminuidos',
                'pages.acordes-aumentados' => 'Acordes Aumentados',
                'pages.acordes-agregados' => 'Acordes Agregados',
                'pages.acordes-alterados' => 'Acordes Alterados'
            ] as $routeName => $label)
                <a href="{{ route($routeName) }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
