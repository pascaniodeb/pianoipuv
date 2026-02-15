@extends('layouts.app')

@section('title', 'Acordes Agregados')

@section('content')

<div class="px-4 md:px-8 lg:px-16 mt-8">
    <!-- Encabezado -->
    <h1
        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>
    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
        Los <em>acordes con tonos añadidos</em> son tríadas mayores con una nota adicional. Se abrevian como "add" y se dividen principalmente en dos tipos:
        <span class="font-semibold text-primary dark:text-blue-400">add9</span> y <span class="font-semibold text-primary dark:text-blue-400">add2</span>. También existen otras variantes menos comunes como
        <span class="font-semibold text-primary dark:text-blue-400">add11</span> y <span class="font-semibold text-primary dark:text-blue-400">add4</span>.
        En el caso de los acordes add9, se añade la novena nota de la escala, mientras que en los add2, se añade la segunda nota de la escala.
    </p>

    <!-- Diagramas de acordes -->
    <h2 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">Diagramas de acordes Agregados:</h2>
    <div class="flex flex-wrap justify-center gap-4 mt-8 mb-8">
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => 'add']) }}"
                class="block text-center py-2 px-4 bg-primary text-white font-semibold rounded-lg hover:bg-secondary transition duration-300">
                {{ $nota }} add
            </a>
        @endforeach
    </div>

    <p class="text-sm text-gray-600 dark:text-gray-400">
        * Para evitar una densidad excesiva de información, solo se listan notas naturales. Por ejemplo, puedes llegar a un acorde
        C#add o Dbadd seleccionando "C add" y luego ajustando el acorde.
    </p>
    <!-- Teoría -->
    <div class="bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md p-4 mt-6 mb-8">
        <h2 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4">Teoría</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
            Los acordes add se forman añadiendo una nota específica a una tríada mayor o menor.
            Por ejemplo, un acorde <span class="font-semibold text-primary dark:text-blue-400">Cadd9</span> incluye la novena nota de la escala, mientras que un <span class="font-semibold text-primary dark:text-blue-400">Cadd2</span> incluye la segunda nota.
        </p>

        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-6 mb-4">Comparación entre C Mayor y los tipos de acordes añadidos:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">C:</span> C – E – G</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cadd9:</span> C – E – G – D</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cadd2:</span> C – D – E – G</li>
            </ul>

        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-6 mb-4">Comparación con los acordes add11 y add4:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">C:</span> C – E – G</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cadd11:</span> C – E – G – F</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cadd4:</span> C – E – F – G</li>
            </ul>
            <p class="text-gray-700 dark:text-gray-300 text-md mt-2">
                Como puedes notar, los acordes <span class="font-semibold text-gray-700 dark:text-gray-300">add11</span> y <span class="font-semibold text-gray-700 dark:text-gray-300">add4</span> incluyen las mismas notas, pero en diferente orden. La undécima es la misma nota que la cuarta, pero en una octava superior.
            </p>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-6 mb-4">Comparación con acordes menores añadidos:</h4>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cm:</span> C – Eb – G</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cmadd9:</span> C – Eb – G – D</li>
                <li><span class="font-semibold text-gray-700 dark:text-gray-300">Cmadd2:</span> C – D – Eb – G</li>
            </ul>
        <p class="text-gray-700 dark:text-gray-300 text-md leading-relaxed">
            También es importante mencionar que existen variantes como <span class="font-semibold text-gray-700 dark:text-gray-300">add6</span>, que se tocan con principios similares, aunque son muy raras. Asimismo, el acorde <span class="font-semibold text-gray-700 dark:text-gray-300">6add9</span> es más común, pero a menudo se escribe como <span class="font-semibold text-gray-700 dark:text-gray-300">6/9</span>.
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
