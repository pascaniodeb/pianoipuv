@extends('layouts.app')

@section('title', 'Acordes Menores')

@section('content')
<div id="content" class="p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-lg text-gray-700 dark:text-gray-300 text-center font-medium mb-8 max-w-4xl mx-auto">
        Los acordes menores son los más comunes después de los mayores. Al alternar entre acordes mayores y menores, notarás diferencias en la calidad del sonido: los mayores suelen sonar neutrales, mientras que los menores transmiten un sentimiento más melancólico. Además de los acordes principales, existen variaciones como acordes de Séptima menor (<span class="font-bold text-indigo-600 dark:text-indigo-400">m7</span>), Novena menor (<span class="font-bold text-indigo-600 dark:text-indigo-400">m9</span>), Sexta menor (<span class="font-bold text-indigo-600 dark:text-indigo-400">m6</span>), entre otros.
        La abreviatura común para los acordes menores es <em class="text-indigo-600 dark:text-indigo-400">m</em>, pero también se usa <em class="text-indigo-600 dark:text-indigo-400">min</em>, como en Cmin y Cmin7.
    </p>

    <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Diagramas de acordes menores:</h2>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'min']) }}"
               class="group relative px-6 py-3 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }} menor</span>
            </a>
        @endforeach
    </div>

    <p class="text-center mb-10">
        <a href="{{ route('pages.resumen-acordes-mayores') }}#menor" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors">
            Ver también un resumen gráfico de los acordes menores en tonalidades comunes →
        </a>
    </p>

    <aside class="mt-8">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg mb-6 max-w-4xl mx-auto">
            Una tríada menor incluye tres notas, que pueden denominarse como <em class="text-indigo-600 dark:text-indigo-400">la raíz</em>, <em class="text-indigo-600 dark:text-indigo-400">tercera menor</em> y <em class="text-indigo-600 dark:text-indigo-400">quinta perfecta</em>. También puede referirse a la primera, la tercera y la quinta notas de la escala relacionada.
        </p>

        <p class="text-gray-700 dark:text-gray-300 text-lg mb-8 text-center">
            Podemos comparar la escala de La Menor con el acorde de La Menor:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3 text-center">Escala de La Menor:</h3>
                <p class="text-gray-700 dark:text-gray-300 font-medium mb-3 text-center">A – B – C – D – E – F – G</p>
                <img src="{{ asset('backend/assets/images/a_minor_scale.png') }}" alt="A Minor Scale" class="w-full rounded-xl shadow-sm">
            </div>
            <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-3 text-center">Acorde de La Menor:</h3>
                <p class="text-gray-700 dark:text-gray-300 font-medium mb-3 text-center">A – C – E</p>
                <img src="{{ asset('backend/assets/images/am.png') }}" alt="A Minor Chord" class="w-full rounded-xl shadow-sm">
            </div>
        </div>
        <p class="text-gray-700 dark:text-gray-300 text-lg mt-6 text-center max-w-4xl mx-auto">
            La diferencia entre el acorde menor y el mayor es la segunda nota. La tercera menor cambia a una tercera mayor.
        </p>
    </aside>

    <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md mt-8 max-w-4xl mx-auto">
        <p class="text-gray-700 dark:text-gray-300 text-center mb-4">
            Podemos comparar el acorde de Do Menor con el acorde de Do Mayor:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
            <div>
                <span class="font-bold text-indigo-600 dark:text-indigo-400">Acorde de Do Menor:</span>
                <p class="text-gray-700 dark:text-gray-300 font-medium mt-2">C – Eb – G</p>
            </div>
            <div>
                <span class="font-bold text-indigo-600 dark:text-indigo-400">Acorde de Do Mayor:</span>
                <p class="text-gray-700 dark:text-gray-300 font-medium mt-2">C – E – G</p>
            </div>
        </div>
    </div>

    <div class="mt-10 max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Fórmula y pasos</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
            Una buena forma de minimizar la memorización es aprender las fórmulas. La fórmula para una tríada menor es <span class="font-bold text-indigo-600 dark:text-indigo-400 text-lg">1 - b3 - 5</span>, que se refiere a los grados de la escala menor.
        </p>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mt-4">
            También puedes aprender por pasos. Desde la primera nota ve tres semitonos a la derecha para llegar a la segunda nota, y desde la segunda nota ve cuatro pasos a la derecha para llegar a la tercera nota.
        </p>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Uso</h2>
        <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md max-w-4xl mx-auto">
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                ¿Cómo y cuándo utilizar las tríadas menores? Estos acordes están entre los más comunes de todos y se utilizan en diversos géneros musicales y situaciones. Normalmente, los acordes menores se combinan con acordes mayores en diferentes configuraciones.
            </p>
        </div>
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mt-10 max-w-4xl mx-auto">
        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6 text-center">Secuencias de acordes</h3>
        <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
            Ejemplos de secuencias de acordes que muestran cómo se pueden utilizar los acordes menores:
        </p>

        <div class="space-y-4 text-lg text-gray-700 dark:text-gray-300">
            <p>1. <strong><a href="{{ route('acorde.variacion', ['nota' => 'am', 'variacion' => 'min']) }}" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">Am</a></strong> – <strong><a href="{{ route('acorde.variacion', ['nota' => 'em', 'variacion' => 'min']) }}" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">Em</a></strong> – <a href="{{ route('acorde.variacion', ['nota' => 'f', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">F</a> – <a href="{{ route('acorde.variacion', ['nota' => 'g', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">G</a></p>
            <p>2. <strong><a href="{{ route('acorde.variacion', ['nota' => 'em', 'variacion' => 'min']) }}" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">Em</a></strong> – <a href="{{ route('acorde.variacion', ['nota' => 'c', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">C</a> – <a href="{{ route('acorde.variacion', ['nota' => 'd', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">D</a> – <a href="{{ route('acorde.variacion', ['nota' => 'g', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">G</a></p>
            <p>3. <strong><a href="{{ route('acorde.variacion', ['nota' => 'dm', 'variacion' => 'min']) }}" class="text-indigo-600 dark:text-indigo-400 font-bold hover:underline">Dm</a></strong> – <a href="{{ route('acorde.variacion', ['nota' => 'g', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">G</a> – <a href="{{ route('acorde.variacion', ['nota' => 'c', 'variacion' => 'maj']) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">C</a></p>
        </div>

        <h3 class="text-xl font-bold text-gray-800 dark:text-white mt-8 mb-4 text-center">En números romanos*</h3>
        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-4">
            <ol class="list-decimal pl-6 text-lg text-gray-700 dark:text-gray-300 space-y-2">
                <li>I V VI VII</li>
                <li>I VI VII III</li>
                <li>I IV VII</li>
            </ol>
        </div>
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
            * Los números romanos describen intervalos de acordes que se pueden usar de la misma manera en todas las tonalidades. Consulta
            <a href="{{ route('pages.tipos-de-acordes') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">una tabla de tonalidades menores incluyendo números romanos</a>.
        </p>
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mt-10">
        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">Otros acordes menores</h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            Como se mencionó anteriormente, existen más grupos de acordes menores. El más común entre estos es el de Séptima menor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de la escala de La menor con el acorde de La menor Séptima:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Escala de A menor:</span> A – B – C – D – E – F – G<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Acorde de A menor 7:</span> A – C – E – G
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            Una notación alternativa poco utilizada para Cm7 podría escribirse como C-7.<br>
            El acorde de Sexta menor se construye añadiendo una sexta nota. Este acorde no está completamente relacionado con la escala menor correspondiente, pero se forma añadiendo una tercera mayor a una tríada menor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de la escala de La menor con el acorde de La menor Sexta:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Escala de A menor:</span> A – B – C – D – E – F – G<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Acorde de A menor 6:</span> A – C – E – F#
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            El siguiente grupo de acordes es el de Novena menor (m9), que se forma añadiendo una novena mayor a un acorde de Séptima menor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de la escala de La menor con el acorde de La menor Novena:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Escala de A menor:</span> A – B – C – D – E – F – G<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Acorde de A menor 9:</span> A – C – E – G – B
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            El siguiente grupo es el de Undécima menor (m11), que se construye añadiendo una tercera al acorde de Novena menor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de la escala de La menor con el acorde de La menor Undécima:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Escala de A menor:</span> A – B – C – D – E – F – G<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Acorde de A menor 11:</span> A – C – E – G – B – D
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            Por último, el acorde de Decimotercera menor (m13) se construye añadiendo una tercera al acorde de Undécima menor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de la escala de La menor con el acorde de La menor Decimotercera:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Escala de A menor:</span> A – B – C – D – E – F – G<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Acorde de A menor 13:</span> A – C – E – G – B – D – F#
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            Como puedes notar, todas las notas de la escala están incluidas en el acorde, excepto F#, que se añade como una decimotercera mayor.
        </p>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            Un grupo peculiar es el de los acordes Menor Mayor (mM o minmaj), que combinan la Séptima menor y la Séptima mayor. También existen variantes que combinan la Séptima menor y la Novena mayor.
        </p>

        <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-6">
            <p class="text-gray-700 dark:text-gray-300 mb-3">
                Comparación de C Menor 7, C Mayor 7 y C Menor Mayor 7:<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C Menor 7:</span> C – Eb – G – Bb<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C Mayor 7:</span> C – E – G – B<br>
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C Menor Mayor 7:</span> C – Eb – G – B
            </p>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
            Todos los acordes mencionados se pueden ver ilustrados con diagramas en este sitio.
        </p>

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
