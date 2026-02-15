@extends('layouts.app')

@section('title', 'Acordes Disminuidos')

@section('content')
<div class="px-4 md:px-8 py-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg max-w-5xl mx-auto mt-6">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
        "Dim" es la abreviatura de <em class="text-indigo-600 dark:text-indigo-400">disminuido</em>. En estos acordes, la tercera y la quinta se reducen medio tono.
        Hay tres categorías principales: las tríadas disminuidas, los acordes de séptima disminuida (<span class="font-semibold text-indigo-600 dark:text-indigo-400">dim7</span>)
        y los acordes de séptima medio disminuida (<span class="font-semibold text-indigo-600 dark:text-indigo-400">m7b5</span> o <span class="font-semibold text-indigo-600 dark:text-indigo-400">m7(b5)</span>).
        Los acordes disminuidos son poco comunes y, principalmente, se utilizan como acordes de transición entre otros acordes.
    </p>

    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-6 text-center">Diagramas de acordes disminuidos:</h2>

    <div class="flex flex-wrap justify-center gap-3 mb-4">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'dim']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }} dim</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-4">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'dim7']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-600 transition-all duration-300 group-hover:from-amber-400 group-hover:to-orange-500"></span>
                <span class="relative z-10">{{ $nota }} dim7</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'm7b5']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-rose-500 to-pink-600 transition-all duration-300 group-hover:from-rose-400 group-hover:to-pink-500"></span>
                <span class="relative z-10">{{ $nota }} m7b5</span>
            </a>
        @endforeach
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mb-8">
        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 text-center">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Además de las categorías ya mencionadas, el acorde de séptima medio disminuido es importante. Este acorde
            es idéntico al séptima disminuido, excepto que la séptima nota es una séptima menor en lugar de una séptima doble disminuida
            (también se puede ver como un acorde de séptima menor con una quinta disminuida).
        </p>

        <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-md mb-6">
            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Comparación de un acorde mayor con sus variaciones disminuidas:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C:</span> C – E – G</li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdim:</span> C – Eb – Gb</li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdim7:</span> C – Eb – Gb – A (Bbb)</li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C medio disminuido 7:</span> C – Eb – Gb – Bb</li>
            </ul>
            <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
                Nota: El B doble bemol (Bbb) en <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdim7</span> se utiliza porque el último tono
                es teóricamente una sexta mayor.
            </p>
        </div>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Fórmulas y Pasos</h3>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            La fórmula para la tríada disminuida es:
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg">1 - b3 - b5</span>.
            Hay tres semitonos para la 2ª nota y tres semitonos para la 3ª.
        </p>

        <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Símbolos alternativos</h4>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Además del símbolo de acorde disminuido (<span class="font-semibold text-indigo-600 dark:text-indigo-400">dim</span>), puedes encontrar el símbolo
            de grado (<span class="font-semibold text-indigo-600 dark:text-indigo-400">°</span>), como en <span class="font-semibold text-indigo-600 dark:text-indigo-400">C°</span>.
            Los acordes de séptima medio disminuidos también pueden representarse con el símbolo
            (<span class="font-semibold text-indigo-600 dark:text-indigo-400">ø</span>), como en <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cø</span>.
        </p>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Uso de los acordes disminuidos</h3>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Los acordes disminuidos se utilizan comúnmente como <em class="text-indigo-600 dark:text-indigo-400">acordes de paso</em>.
            Estos funcionan como "acordes intermedios", creando tensión momentánea entre acordes que tienen una relación más fuerte con la tonalidad.
        </p>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Progresiones con acordes disminuidos:</h3>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Ebdim</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">G7</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">G</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Bbdim</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">D7</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Cmaj7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Dbdim7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Dm7</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Emaj7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Fdim7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">F#m7</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Am7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">Bm7b5</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">E7</span></li>
                <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">Em7</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">F#m7b5</span> - <span class="font-semibold text-indigo-600 dark:text-indigo-400">B7</span></li>
            </ul>
        </div>
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
