@extends('layouts.app')

@section('title', 'Acordes Mayores')

@section('content')
<div id="content" class="p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-lg text-gray-700 dark:text-gray-300 text-center font-medium mb-8 max-w-3xl mx-auto">
        Los acordes mayores son los más comunes en el piano y otros instrumentos. Se escriben como letras solas (C, D, E, etc.)
        o como <em class="text-indigo-600 dark:text-indigo-400">maj</em>. También incluyen variantes como <strong class="text-indigo-600 dark:text-indigo-400">maj7</strong>, <strong class="text-indigo-600 dark:text-indigo-400">maj9</strong> y <strong class="text-indigo-600 dark:text-indigo-400">6</strong>.
    </p>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.principal', ['nota' => strtolower($nota)]) }}"
               class="group relative px-6 py-3 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }} Mayor</span>
            </a>
        @endforeach
    </div>

    <p class="text-center mb-8">
        <a href="{{ route('pages.resumen-acordes-mayores') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors">
            Ver también un resumen gráfico de los acordes mayores en tonalidades comunes →
        </a>
    </p>

    <aside class="mt-8 text-center">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 mx-auto max-w-4xl mb-8 leading-relaxed">
            Una tríada mayor incluye tres notas: <em class="text-indigo-600 dark:text-indigo-400">la raíz</em>, <em class="text-indigo-600 dark:text-indigo-400">tercera mayor</em> y <em class="text-indigo-600 dark:text-indigo-400">quinta perfecta</em>.
            Esto equivale a la primera, tercera y quinta notas de la escala correspondiente.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Escala C Mayor:</h3>
                <p class="text-gray-700 dark:text-gray-300 font-medium mb-3">C – D – E – F – G – A – B</p>
                <img src="{{ asset('backend/assets/images/c_scale.png') }}" alt="C Major Scale" class="w-full rounded-xl shadow-sm">
            </div>
            <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Acorde C Mayor:</h3>
                <p class="text-gray-700 dark:text-gray-300 font-medium mb-3">C – E – G</p>
                <img src="{{ asset('backend/assets/images/c.png') }}" alt="C Major Chord" class="w-full rounded-xl shadow-sm">
            </div>
        </div>
    </aside>

    <div class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Fórmula y Etapas</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed max-w-4xl mx-auto">
            Una buena forma de disminuir la memorización es aprender las fórmulas. La fórmula de un acorde de tríada mayor es
            <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg">1 - 3 - 5</span>, que se refiere a los grados de la escala mayor.
        </p>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mt-4 max-w-4xl mx-auto">
            También puedes aprender por pasos: Desde la <span class="font-semibold">1ª nota</span>, ve cuatro medios pasos a la derecha para llegar a la
            <span class="font-semibold">2ª nota</span>, y desde la <span class="font-semibold">2ª nota</span>, ve tres pasos a la derecha para llegar a la
            <span class="font-semibold">3ª nota</span>.
        </p>
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mt-10">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Utiliza</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            ¿Cómo y cuándo utilizar las tríadas mayores? Dado que son los acordes más comunes, se utilizan en diversos
            géneros musicales y en todo tipo de situaciones. Los acordes mayores pueden utilizarse exclusivamente en
            <span class="font-semibold text-indigo-600 dark:text-indigo-400">secuencias más cortas</span>, mientras que las <span class="font-semibold text-indigo-600 dark:text-indigo-400">secuencias más largas</span> suelen incluir acordes menores.
        </p>
        <div class="mt-6 max-w-4xl mx-auto">
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Ejemplos de secuencias de acordes que incluyen tríadas mayores:
            </p>
            <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
                <ol class="list-decimal pl-6 text-lg text-gray-700 dark:text-gray-300 space-y-3">
                    <li>
                        <strong><a href="c" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">C</a></strong> -
                        <strong><a href="f" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">F</a></strong> -
                        <strong><a href="g" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">G</a></strong>
                    </li>
                    <li>
                        <strong><a href="c" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">C</a></strong> -
                        <a href="emin" class="text-indigo-600 dark:text-indigo-400 hover:underline">Em</a> -
                        <strong><a href="f" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">F</a></strong> -
                        <strong><a href="g" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">G</a></strong>
                    </li>
                    <li>
                        <strong><a href="c" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">C</a></strong> -
                        <strong><a href="f" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">F</a></strong> -
                        <a href="am" class="text-indigo-600 dark:text-indigo-400 hover:underline">Am</a> -
                        <strong><a href="g" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">G</a></strong>
                    </li>
                </ol>
            </div>
            <div class="mt-8">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-4">En números romanos</h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Los números romanos describen intervalos de acordes que pueden utilizarse del mismo modo en todas las tonalidades.
                </p>
                <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
                    <ol class="list-decimal pl-6 text-lg text-gray-700 dark:text-gray-300 space-y-2">
                        <li><strong>I IV V</strong></li>
                        <li><strong>I III IV V</strong></li>
                        <li><strong>I IV VI V</strong></li>
                    </ol>
                </div>
                <p class="text-gray-700 dark:text-gray-300 mt-4">
                    Ver <a href="{{ route('pages.progresiones') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">una tabla con las principales claves, incluidos los números romanos</a>.
                </p>
            </div>
        </div>
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mt-10">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Otros acordes mayores</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            Continuemos con los acordes de séptima mayor que se construyen añadiendo la séptima nota en la escala relacionada.
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Comparación de la escala C Mayor con el acorde C Mayor 7:</h3>
            <p class="text-gray-700 dark:text-gray-300">
                <span class="font-semibold">Escala de C Mayor:</span> C – D – E – F – G – A – B <br>
                <span class="font-semibold">Acorde de C7:</span> C – E – G – B
            </p>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            También hay acordes de sexta mayor con la sexta nota de la escala agregada a una tríada. Estos se escriben sin la abreviatura <em class="text-indigo-600 dark:text-indigo-400">"maj"</em> y, a veces, esta categoría se llama <strong class="text-indigo-600 dark:text-indigo-400">6ta. agregada</strong>. Relevante aquí también es el 6/9 menos común, o <strong class="text-indigo-600 dark:text-indigo-400">6Add9</strong> (sexta con una novena mayor agregada).
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Comparación de la escala C Mayor con C6 y C6/9:</h3>
            <p class="text-gray-700 dark:text-gray-300">
                <span class="font-semibold">Escala de C Mayor:</span> C – D – E – F – G – A – B <br>
                <span class="font-semibold">Acorde de C6:</span> C – E – G – A <br>
                <span class="font-semibold">Acorde C6/9:</span> C – E – G – A – D
            </p>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            El siguiente tipo que debemos conocer es el acorde de novena mayor (<strong class="text-indigo-600 dark:text-indigo-400">maj9</strong>). Este acorde se construye añadiendo una tercera mayor a un acorde de séptima mayor. No debe confundirse el acorde de novena mayor con el acorde de novena dominante.
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Comparación de la escala C Mayor con Cmaj9:</h3>
            <p class="text-gray-700 dark:text-gray-300">
                <span class="font-semibold">Escala de C Mayor:</span> C – D – E – F – G – A – B <br>
                <span class="font-semibold">Acorde de C Mayor 9:</span> C – E – G – B – D
            </p>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            Un poco inusual es la undécima mayor (<strong class="text-indigo-600 dark:text-indigo-400">maj11</strong>), que se escribe mayormente como <strong class="text-indigo-600 dark:text-indigo-400">maj9(#11)</strong> ya que la undécima normalmente se eleva un semitono. Esto se debe a la disonancia que de otro modo se produce entre la tercera mayor y la undécima.
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Comparación de la escala C Mayor con Cmaj11 o Cmaj9(#11):</h3>
            <p class="text-gray-700 dark:text-gray-300">
                <span class="font-semibold">Escala de C Mayor:</span> C – D – E – F – G – A – B <br>
                <span class="font-semibold">Cmaj11 (no tan común):</span> C – E – G – B – D – F <br>
                <span class="font-semibold">Cmaj9#11:</span> C – E – G – B – D – F#
            </p>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            El siguiente es el acorde mayor decimotercero (<strong class="text-indigo-600 dark:text-indigo-400">maj13</strong>), que se construye añadiendo una 13ª. Este acorde incluye siete notas, pero para hacerlo más práctico, algunas notas (especialmente la undécima) normalmente se omiten. No debe confundirse <strong class="text-indigo-600 dark:text-indigo-400">Maj13</strong> con la 13ª dominante.
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3">Comparación de la escala C Mayor con Cmaj13:</h3>
            <p class="text-gray-700 dark:text-gray-300">
                <span class="font-semibold">Escala de C Mayor:</span> C – D – E – F – G – A – B <br>
                <span class="font-semibold">Acorde C Mayor 13:</span> C – E – G – B – D – A <br>
                <span class="font-semibold">Cmaj13#11:</span> C – E – G – B – D – F# – A
            </p>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mt-6 max-w-4xl mx-auto">
            Consulte los enlaces anteriores o utilice el cuadro de búsqueda para ver los diagramas (algunas de las categorías menos comunes no se presentan).
        </p>
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mt-10">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Símbolos de acordes alternativos</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            Además del símbolo del acorde mayor que se presenta en este sitio, puede encontrar alternativas, incluidas las siguientes en lugar de C:
        </p>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <ul class="list-disc pl-6 text-gray-700 dark:text-gray-300 space-y-3">
                <li><span class="font-bold text-indigo-600 dark:text-indigo-400">CMaj</span>: símbolo común donde "Maj" se escribe como la abreviatura de mayor.</li>
                <li><span class="font-bold text-indigo-600 dark:text-indigo-400">C△</span>: se escribe como la abreviatura de mayor.</li>
                <li><span class="font-bold text-indigo-600 dark:text-indigo-400">CM</span>: utiliza una letra mayúscula para "major", pero no es recomendable por la posible confusión con un símbolo de "minor".</li>
                <li><span class="font-bold text-indigo-600 dark:text-indigo-400">Cma</span>: símbolo poco común donde "ma" se escribe como la abreviatura de mayor.</li>
            </ul>
        </div>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            <span class="font-bold text-indigo-600 dark:text-indigo-400">CM7</span> o <span class="font-bold text-indigo-600 dark:text-indigo-400">C△7</span> son nombres de acordes alternativos utilizados en lugar de <span class="font-bold">Cmaj7</span> (el triángulo a veces también se usa en partituras para piano como símbolo único para la séptima mayor).
        </p>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            <span class="font-bold text-indigo-600 dark:text-indigo-400">CM9</span> o <span class="font-bold text-indigo-600 dark:text-indigo-400">C△9</span> son nombres de acordes alternativos utilizados en lugar de <span class="font-bold">Cmaj9</span>.
            <span class="font-bold text-indigo-600 dark:text-indigo-400">CM11</span> o <span class="font-bold text-indigo-600 dark:text-indigo-400">C△11</span> se utilizan en lugar de <span class="font-bold">Cmaj11</span>, y
            <span class="font-bold text-indigo-600 dark:text-indigo-400">CM13</span> o <span class="font-bold text-indigo-600 dark:text-indigo-400">C△13</span> son nombres alternativos utilizados en lugar de <span class="font-bold">Cmaj13</span>.
        </p>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6 max-w-4xl mx-auto">
            <span class="font-bold text-indigo-600 dark:text-indigo-400">CM6</span> es un nombre de acorde alternativo que a veces se utiliza en lugar de <span class="font-bold">C6</span>.
        </p>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed max-w-4xl mx-auto">
            Además, el acorde extendido <span class="font-bold text-indigo-600 dark:text-indigo-400">C13</span> podría escribirse como
            <span class="font-bold text-indigo-600 dark:text-indigo-400">Cmaj9(add13)</span>.
        </p>
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
