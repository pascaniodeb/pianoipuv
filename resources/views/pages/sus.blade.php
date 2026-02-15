@extends('layouts.app')

@section('title', 'Acordes Suspendidos')

@section('content')
<div id="content" class="container mx-auto px-4 py-8">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mt-8 mb-8 max-w-4xl mx-auto text-center">
        "Sus" es la abreviatura de <em class="text-indigo-600 dark:text-indigo-400">suspendidos</em>, lo que significa que en estos acordes la tercera (la segunda nota del acorde) es reemplazada por una <span class="font-semibold text-indigo-600 dark:text-indigo-400">segunda mayor</span> o una <span class="font-semibold text-indigo-600 dark:text-indigo-400">cuarta perfecta</span>. Cuando se reemplaza por una segunda mayor, el nombre del acorde es <span class="font-semibold text-indigo-600 dark:text-indigo-400">sus2</span>. Por otro lado, cuando es reemplazada por una cuarta perfecta, el acorde se llama <span class="font-semibold text-indigo-600 dark:text-indigo-400">sus4</span>. También existen acordes suspendidos extendidos.
    </p>

    <p class="text-center mb-6">
        <span class="font-bold text-xl text-gray-800 dark:text-white mb-4 block">Consulta los diagramas de acordes suspendidos:</span>
    </p>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'sus']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }}sus</span>
            </a>
        @endforeach
    </div>

    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <div>
            <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 text-center">Teoría</h2>
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8">
                Como se mencionó anteriormente, existen varias categorías de acordes suspendidos, pero en la mayoría de los casos son sus2 o sus4.
            </p>

            <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mb-8">
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed text-center mb-6">
                    Comparación entre el acorde C mayor, Csus2 y Csus4:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div>
                        <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-2">C:</span>
                        <span class="text-gray-700 dark:text-gray-300 block mb-3">C – E – G</span>
                        <img src="{{ asset('backend/assets/images/c.png') }}" alt="Acorde C" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                    </div>
                    <div>
                        <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-2">Csus2:</span>
                        <span class="text-gray-700 dark:text-gray-300 block mb-3">C – D – G</span>
                        <img src="{{ asset('backend/assets/images/csus2.png') }}" alt="Acorde Csus2" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                    </div>
                    <div>
                        <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-2">Csus4:</span>
                        <span class="text-gray-700 dark:text-gray-300 block mb-3">C – F – G</span>
                        <img src="{{ asset('backend/assets/images/csus4.png') }}" alt="Acorde Csus4" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                    </div>
                </div>
            </div>

            <div class="px-4 md:px-8">
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Fórmulas</h3>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
                    Las fórmulas para los acordes suspendidos son:
                </p>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-3 mb-8 ml-4">
                    <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Sus2:</span> 1 - 2 - 5</li>
                    <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Sus4:</span> 1 - 4 - 5</li>
                </ul>

                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 mt-8">Otros acordes Sus</h3>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
                    Además de los acordes comunes sus2 y sus4, existen otras categorías. Por ejemplo, un acorde de séptima o de novena también puede ser suspendido.
                </p>

                <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-md mb-6">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Comparación de C7 con sus variaciones suspendidas:</h4>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C7:</span> C – E – G – Bb</li>
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C7sus2:</span> C – D – G – Bb</li>
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C7sus4:</span> C – F – G – Bb</li>
                    </ul>
                </div>

                <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-md mb-6">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Comparación de C9 con C9sus4:</h4>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C9:</span> C – E – G – Bb – D</li>
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C9sus4:</span> C – F – G – Bb – D</li>
                    </ul>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mt-4">
                        Entre los acordes suspendidos extendidos, el acorde noveno suspendido es el menos común.
                        <span class="font-semibold text-indigo-600 dark:text-indigo-400">C9sus4</span> suele denominarse más comúnmente <span class="font-semibold text-indigo-600 dark:text-indigo-400">C11</span>
                        (técnicamente, es un C11 invertido sin una tercera mayor).
                    </p>
                </div>

                <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-md mb-6">
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Comparación de acordes regulares con Csus2/4:</h4>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Csus2:</span> C – D – G</li>
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Csus4:</span> C – F – G</li>
                        <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Csus2/4:</span> C – D – F – G</li>
                    </ul>
                </div>

                <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 mt-8">Nombres alternativos de acordes</h4>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                    Además de los nombres estándar sus4/sus2, pueden aparecer anotaciones como <span class="font-semibold text-indigo-600 dark:text-indigo-400">C4</span>,
                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">D4</span>, <span class="font-semibold text-indigo-600 dark:text-indigo-400">E4</span>, y así sucesivamente.
                    A menudo, estas anotaciones se combinan con <span class="font-semibold text-indigo-600 dark:text-indigo-400">C3</span>,
                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">D3</span>, <span class="font-semibold text-indigo-600 dark:text-indigo-400">E3</span>, lo que indica
                    una progresión de acordes suspendidos a mayores.
                </p>
            </div>
        </div>

        <div class="mt-10">
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
</div>

@endsection
