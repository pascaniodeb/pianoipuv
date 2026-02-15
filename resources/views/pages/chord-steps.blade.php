@extends('layouts.app')

@section('title', 'Construir acordes usando pasos')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <!-- Introducción -->
    <p class="text-lg text-gray-700 dark:text-gray-300 text-center mb-6">
        Una lista que muestra cómo se construyen los acordes con intervalos de semitonos y tonos.
    </p>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Conocer los intervalos (cuántos pasos hay entre las teclas o notas) permitirá tocar prácticamente cualquier acorde. Por ejemplo, para C mayor son cuatro semitonos y tres semitonos desde la raíz. Conocer estas secuencias para cualquier acorde facilitará la construcción de una gran variedad de acordes, incluidos C, Cm, C7, Cm7, C9, Cm9, C11, Cm11, C13 y Cm13 con varias notas raíz.
    </p>

    <!-- Construyendo tríadas -->
    <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Construyendo Tríadas</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Las tríadas son acordes de tres notas y las categorías principales son mayor, menor, disminuida y aumentada:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Tríada mayor:</strong> raíz, 4 pasos, 3 pasos.</li>
        <li><strong>Tríada menor:</strong> raíz, 3 pasos, 4 pasos.</li>
        <li><strong>Tríada disminuida:</strong> raíz, 3 pasos, 3 pasos.</li>
        <li><strong>Tríada aumentada:</strong> raíz, 4 pasos, 4 pasos.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Los pasos se refieren a <em>semitonos</em>. Por lo tanto, entre C y E hay cuatro <em>semitonos</em>.
    </p>

    <!-- Construyendo acordes de séptima -->
    <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4">Construyendo Acordes de Séptima</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los acordes de séptima se caracterizan por el intervalo de séptima que extiende un acorde de tríada:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Mayor 7:</strong> raíz, 4 pasos, 3 pasos, 4 pasos.</li>
        <li><strong>Menor 7:</strong> raíz, 3 pasos, 4 pasos, 3 pasos.</li>
        <li><strong>Dominante 7:</strong> raíz, 4 pasos, 3 pasos, 3 pasos.</li>
        <li><strong>Disminuida 7:</strong> raíz, 3 pasos, 3 pasos, 3 pasos.</li>
        <li><strong>Aumentada 7:</strong> raíz, 4 pasos, 4 pasos, 3 pasos.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Mientras que la 7ma mayor incluye un intervalo de 7ma mayor, la 7ma menor, la 7ma dominante y la 7ma aumentada incluyen un intervalo de 7ma menor. La 7ma disminuida se destaca por incluir una 7ma doble bemol.
    </p>

    <!-- Construyendo acordes de novena -->
    <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Construyendo Acordes de Novena</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los acordes de novena se caracterizan por el intervalo de novena que extiende un acorde de séptima:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Mayor 9:</strong> raíz, 4 pasos, 3 pasos, 4 pasos, 3 pasos.</li>
        <li><strong>Menor 9:</strong> raíz, 3 pasos, 4 pasos, 4 pasos.</li>
        <li><strong>Dominante 9:</strong> raíz, 4 pasos, 3 pasos, 3 pasos, 4 pasos.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Por ejemplo, Cmaj9, Cm9 y C9 incluyen una nota D.
    </p>

    <!-- Construyendo acordes de onceava -->
    <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4">Construyendo Acordes de Onceava</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los acordes de onceava se caracterizan por el intervalo de onceava que extiende un acorde de novena:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Mayor 11:</strong> raíz, 4 pasos, 3 pasos, 4 pasos, 3 pasos, 3 pasos.</li>
        <li><strong>Menor 11:</strong> raíz, 3 pasos, 4 pasos, 4 pasos, 3 pasos.</li>
        <li><strong>Dominante 11:</strong> raíz, 4 pasos, 3 pasos, 3 pasos, 4 pasos, 3 pasos.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Por ejemplo, Cmaj11, Cm11 y C11 incluyen una nota F.
    </p>

    <!-- Construyendo acordes de treceava -->
    <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Construyendo Acordes de Treceava</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los acordes de treceava se caracterizan por el intervalo de treceava que extiende un acorde de onceava:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Mayor 13:</strong> raíz, 4 pasos, 3 pasos, 4 pasos, 3 pasos, 3 pasos, 4 pasos.</li>
        <li><strong>Menor 13:</strong> raíz, 3 pasos, 4 pasos, 4 pasos, 3 pasos, 4 pasos.</li>
        <li><strong>Dominante 13:</strong> raíz, 4 pasos, 3 pasos, 4 pasos, 3 pasos, 4 pasos.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Por ejemplo, Cmaj13, Cm13 y C13 incluyen una nota A.
    </p>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Si estudias teoría musical o simplemente tocas el piano, conocer estas relaciones puede ser muy útil para comprender y aprender acordes.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-8">
        <a href="{{ route('pages.simbolos-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
            Ver también símbolos de acordes &#8250;
        </a>
    </div>
</div>
@endsection
