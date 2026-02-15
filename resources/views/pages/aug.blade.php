@extends('layouts.app')

@section('title', 'Acordes Aumentados')

@section('content')
<div class="px-4 md:px-8 py-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg max-w-5xl mx-auto mt-6">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
        "Aug" es la abreviatura de <em class="text-indigo-600 dark:text-indigo-400">aumentado</em>. En una tríada aumentada, hay una nota fundamental y dos terceras mayores.
        Estos acordes son poco comunes y su función principal es servir como transición entre dos acordes sin una relación directa.
    </p>

    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-6 text-center">Diagramas de acordes aumentados:</h2>

    <div class="flex flex-wrap justify-center gap-3 mb-4">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'aug']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }} aug</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'aug7']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-600 transition-all duration-300 group-hover:from-amber-400 group-hover:to-orange-500"></span>
                <span class="relative z-10">{{ $nota }} aug7</span>
            </a>
        @endforeach
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 text-center">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Un acorde aumentado generalmente suena disonante. Esto ocurre porque una de las tres notas de la tríada no pertenece a la misma escala que la nota raíz. Por ejemplo, <span class="font-semibold text-indigo-600 dark:text-indigo-400">Gaug</span> incluye las notas G, B y D#, de las cuales solo G y B forman parte de la escala de G mayor.
        </p>

        <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-md mb-6">
            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-4 text-center">Comparación entre el acorde mayor, aumentado y aumentado con séptima:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C:</span> C – E – G</li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Caug:</span> C – E – G#</li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Caug7:</span> C – E – G# – A#</li>
            </ul>
        </div>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Fórmulas y Pasos</h3>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            La fórmula para la tríada aumentada es:
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg">1 - 3 - #5</span>.
            Hay cuatro semitonos hasta la 2ª nota y cuatro semitonos hasta la 3ª.
        </p>

        <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Símbolos alternativos</h4>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Además del símbolo <span class="font-semibold text-indigo-600 dark:text-indigo-400">aug</span>, también puedes encontrar el símbolo de suma (+), como en
            <span class="font-semibold text-indigo-600 dark:text-indigo-400">C+</span>. Otra notación menos común es <span class="font-semibold text-indigo-600 dark:text-indigo-400">C(#5)</span>, indicando que la quinta está aumentada.
        </p>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Uso de los acordes aumentados</h3>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Los acordes aumentados se utilizan frecuentemente como <em class="text-indigo-600 dark:text-indigo-400">acordes de paso</em>, colocados entre dos acordes que tienen una relación más fuerte con la tonalidad. Una forma común es crear un movimiento desde el acorde tónico hacia su versión aumentada, luego subir medio tono desde la quinta mayor y usar esa nota como raíz para el siguiente acorde.
        </p>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Progresiones con acordes aumentados:</h3>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-4">
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Caug</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Am</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">G</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Gaug</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Em</span></li>
            </ul>
        </div>
        <p class="text-gray-500 dark:text-gray-400 text-sm italic">
            Los intervalos son los mismos: I I+ vi.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Categorías de Acordes</h2>
        <div class="flex flex-wrap justify-center gap-3">
            @foreach ([
                'pages.acordes-mayores' => 'Mayores',
                'pages.acordes-menores' => 'Menores',
                'pages.acordes-septima' => 'Séptima',
                'pages.acordes-extendidos' => 'Extendidos',
                'pages.acordes-suspendidos' => 'Suspendidos',
                'pages.acordes-disminuidos' => 'Disminuidos',
                'pages.acordes-aumentados' => 'Aumentados',
                'pages.acordes-agregados' => 'Agregados',
                'pages.acordes-alterados' => 'Alterados'
            ] as $routeName => $label)
                <a href="{{ route($routeName) }}" class="px-5 py-2.5 bg-indigo-100 dark:bg-slate-700 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
