@extends('layouts.app')

@section('title', 'Acordes de Séptima')

@section('content')
<div class="container mx-auto p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
        Los acordes de séptima son fundamentales en la teoría musical y se pueden encontrar en seis variantes principales. Las tres más comunes son:
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Dominante (7)</span>,
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Mayor (maj7)</span> y
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Menor (m7)</span>.
        Variantes menos comunes incluyen:
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Menor Mayor (mM7)</span>,
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Disminuida (dim7)</span>, y
        <span class="font-bold text-indigo-600 dark:text-indigo-400">Séptima Aumentada (aug7)</span>. Además, existen acordes de séptima alternativos.
    </p>

    <div class="flex flex-wrap justify-center gap-3 mb-6">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '7']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }}7</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-6">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'maj7']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-600 transition-all duration-300 group-hover:from-amber-400 group-hover:to-orange-500"></span>
                <span class="relative z-10">{{ $nota }}maj7</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'm7']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-rose-500 to-pink-600 transition-all duration-300 group-hover:from-rose-400 group-hover:to-pink-500"></span>
                <span class="relative z-10">{{ $nota }}m7</span>
            </a>
        @endforeach
    </div>

    <p class="text-center mb-10">
        <a href="{{ route('pages.resumen-acordes-mayores') }}#septima-dominante" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors">
            Acordes de séptima dominante en tonalidades comunes →
        </a>
    </p>

    <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Teoría</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
        Los acordes de séptima añaden la séptima nota de una escala a una tríada (un acorde de tres notas), creando un acorde de cuatro notas, también llamado <em class="text-indigo-600 dark:text-indigo-400">tetracorde</em>. A continuación, ejemplos de diferentes acordes de séptima con C como nota raíz:
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 max-w-5xl mx-auto">
        <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md text-center">
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-3">C7:</span>
            <span class="text-gray-700 dark:text-gray-300 block mb-3">C – E – G – Bb</span>
            <img src="{{ asset('backend/assets/images/c7.png') }}" alt="C7 chord" class="w-full rounded-xl shadow-sm">
        </div>
        <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md text-center">
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-3">Cm7:</span>
            <span class="text-gray-700 dark:text-gray-300 block mb-3">C – Eb – G – Bb</span>
            <img src="{{ asset('backend/assets/images/cm7.png') }}" alt="Cm7 chord" class="w-full rounded-xl shadow-sm">
        </div>
        <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md text-center">
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg block mb-3">Cmaj7:</span>
            <span class="text-gray-700 dark:text-gray-300 block mb-3">C – E – G – B</span>
            <img src="{{ asset('backend/assets/images/cmaj7.png') }}" alt="Cmaj7 chord" class="w-full rounded-xl shadow-sm">
        </div>
    </div>

    <div class="space-y-6 max-w-4xl mx-auto">
        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">7ª Dominante</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                El término <strong>"dominante"</strong> se refiere al quinto grado de la escala diatónica y se llama dominante porque tiene más peso después de la tónica (la raíz de la escala) y no es ni mayor ni menor.
                El acorde dominante más común es el séptimo dominante, en el que se añade una séptima menor a una tríada
                <a href="{{ route('pages.acordes-mayores') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">mayor</a>.
                Un nombre alternativo menos común para C7 es Cdom7 (<em>dom</em> significa dominante). Se puede escuchar una ligera disonancia en los acordes de séptima porque una de las notas, la séptima, no está incluida en la misma tonalidad que la nota raíz.
                Cabe destacar que, a veces, se omite la quinta, especialmente cuando estos acordes están invertidos.
            </p>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">7ª Mayor</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                La 7ª mayor se construye añadiendo el séptimo tono de la escala a una tríada mayor.
            </p>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">7ª Menor</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                La 7ª menor se construye añadiendo una séptima menor a una tríada menor. Similar al acorde de 7ª dominante, se puede escuchar una ligera disonancia en los acordes de 7ª menor porque una de las notas, la séptima, no está incluida en la misma tonalidad que la nota raíz.
            </p>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Uso de los acordes</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                ¿Cómo y cuándo usar los acordes de séptima? Los acordes de séptima son comunes en muchos estilos musicales, pero especialmente en el blues
                (<em class="text-indigo-600 dark:text-indigo-400">excluyendo la 7ª mayor</em>) y en el jazz.
            </p>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Secuencias de acordes de séptima</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Las siguientes progresiones muestran cómo se pueden utilizar los acordes de séptima:
            </p>
            <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-4">
                <ul class="space-y-3 text-gray-700 dark:text-gray-300 text-lg">
                    <li><strong>1.</strong> C7 - F7 - C7 - G7 - F7 - C7</li>
                    <li><strong>2.</strong> C7 - F7 - C7 - Dm7 - G7 - F7 - C7</li>
                    <li><strong>3.</strong> C7 - F7 - C7 - A7 - Dm7 - G7 - C7</li>
                    <li><strong>4.</strong> Dm7 - G7 - Cmaj7</li>
                </ul>
            </div>
            <p class="text-gray-500 dark:text-gray-400 italic text-sm">(* Progresiones típicas de blues y jazz.)</p>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Acorde menor séptima bemol 5 (Minor 7b5)</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                El acorde menor séptima bemol 5 (m7♭5) tiene una quinta disminuida. Este grupo de acordes también es conocido como <em class="font-semibold">medio disminuido</em>.
            </p>

            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Acordes de séptima adicionales</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                A continuación, se presentan otros tres tipos de acordes de séptima con ejemplos en la nota de <span class="font-bold text-indigo-600 dark:text-indigo-400">C</span>:
            </p>

            <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-3">Cdim7 (Séptima disminuida)</h4>
                <p class="text-gray-600 dark:text-gray-400 mb-3">Notas: C – Eb – Gb – A</p>
                <img src="{{ asset('backend/assets/images/cdim7.png') }}" alt="Cdim7 chord" class="w-full max-w-xs mx-auto rounded-lg shadow-md" loading="lazy" />
            </div>

            <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-3">Caug7 (Séptima aumentada)</h4>
                <p class="text-gray-600 dark:text-gray-400 mb-3">Notas: C – E – G# – A#</p>
                <img src="{{ asset('backend/assets/images/caug7.png') }}" alt="Caug7 chord" class="w-full max-w-xs mx-auto rounded-lg shadow-md" loading="lazy" />
            </div>

            <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-3">CmM7 (Menor mayor séptima)</h4>
                <p class="text-gray-600 dark:text-gray-400 mb-3">Notas: C – Eb – G – B</p>
                <img src="{{ asset('backend/assets/images/cminmaj7.png') }}" alt="CmM7 chord" class="w-full max-w-xs mx-auto rounded-lg shadow-md" loading="lazy" />
            </div>
        </div>

        <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md">
            <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Acordes de séptima alternativos</h3>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Existen otros acordes de séptima como <span class="font-bold text-indigo-600 dark:text-indigo-400">7♭5</span> y <span class="font-bold text-indigo-600 dark:text-indigo-400">7♯9</span>.
                Estos acordes ofrecen más variaciones y opciones musicales en diferentes contextos.
                Para más información sobre estas variaciones, consulta los
                <a href="{{ route('pages.acordes-alterados') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline transition-colors">acordes alterados</a>.
            </p>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                El acorde de séptima también pertenece al grupo de los
                <a href="{{ route('pages.acordes-extendidos') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline transition-colors">acordes extendidos</a>,
                que incluyen aún más posibilidades de exploración armónica.
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
@endsection
