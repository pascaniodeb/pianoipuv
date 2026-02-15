@extends('layouts.app')

@section('title', 'Símbolos de acordes')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center mb-8">@yield('title')</h1>

    <!-- Imagen principal con contenedor -->
    <div class="flex justify-center mb-8">
        <div class="w-96 md:w-80 lg:w-96">
            <img src="{{ asset('backend/assets/images/chord_symbols.png') }}" alt="Colección de nombres y símbolos de acordes" class="w-full h-auto rounded shadow-md">
        </div>
    </div>

    <!-- Introducción -->
    <p class="text-lg text-gray-700 dark:text-gray-300 text-center mb-8">
        Existen muchos nombres y símbolos de acordes. En esta guía se explicarán la mayoría de los nombres, símbolos, sufijos y abreviaturas existentes.
    </p>

    <!-- Secciones -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Las letras</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
            La primera parte de un símbolo de acorde consiste en una letra mayúscula que indica la nota fundamental del acorde. Las letras utilizadas son: A, B, C, D, E, F y G. En algunos países, la letra H se utiliza en lugar de B.
        </p>
        <p class="text-gray-700 dark:text-gray-300 text-lg">
            Por ejemplo, <strong>Hm</strong> (H menor) es lo mismo que <strong>Bm</strong> (B menor).
        </p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4">Los números</h2>
        <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
            Los números en los nombres de los acordes representan grados de la escala y no la cantidad de notas del acorde.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">7</h3>
                <p class="text-gray-700 dark:text-gray-300">Indica una séptima añadida al acorde. Ejemplo: <strong>Cmaj7</strong> incluye la nota B.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">6, 9, 11, 13</h3>
                <p class="text-gray-700 dark:text-gray-300">Representan grados añadidos al acorde, como en C6, C9, C11 y C13.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">5</h3>
                <p class="text-gray-700 dark:text-gray-300">Indica un acorde que solo consta de la raíz y la quinta. Ejemplo: <strong>B5</strong>.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">4</h3>
                <p class="text-gray-700 dark:text-gray-300">Indica un acorde de cuarta suspendida, como <strong>F4</strong> (equivalente a <strong>Fsus4</strong>).</p>
            </div>
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Abreviaturas y sufijos</h2>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
            <li><strong>Min</strong> o <strong>m</strong>: Significa menor. Ejemplo: Cm.</li>
            <li><strong>Maj</strong> o <strong>M</strong>: Significa mayor. Ejemplo: Cmaj7.</li>
            <li><strong>Dim</strong>: Significa disminuido. Ejemplo: Dim7.</li>
            <li><strong>Aug</strong>: Significa aumentado. Ejemplo: Aug7.</li>
            <li><strong>Sus</strong>: Indica un acorde suspendido, como Sus4 o Sus2.</li>
            <li><strong>Add</strong>: Indica una nota añadida. Ejemplo: Add9.</li>
        </ul>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4">Signos y símbolos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Sostenido (#) y Bemol (b)</h3>
                <p class="text-gray-700 dark:text-gray-300">Indican tonos elevados o descendidos. Ejemplo: <strong>C#</strong> (Do sostenido) y <strong>Db</strong> (Re bemol).</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Más (+) y Menos (-)</h3>
                <p class="text-gray-700 dark:text-gray-300">El signo más indica un acorde aumentado, mientras que el signo menos puede indicar un acorde menor (aunque es poco común).</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Triángulos y círculos</h3>
                <p class="text-gray-700 dark:text-gray-300">El triángulo indica mayor (D△ = D mayor). Un círculo pequeño (B°) indica disminuido y un círculo con una línea diagonal (Dø) indica semidisminuido.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Paréntesis y barras</h3>
                <p class="text-gray-700 dark:text-gray-300">Los paréntesis aclaran los acordes modificados (C7(#5)), y las barras indican inversiones o notas graves alternativas (C/E).</p>
            </div>
        </div>
    </section>

    <!-- Botón al final -->
    <div class="text-center mt-8">
        <a href="{{ route('pages.tipos-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
            Ver también tipos de acordes &#8250;
        </a>
    </div>
</div>
@endsection
