@extends('layouts.app')

@section('title', 'Más Acordes')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <!-- Introducción -->
    <p class="text-xl text-gray-800 dark:text-gray-300 text-center font-medium mb-6">
        Las categorías de acordes además de los mayores y menores que se encuentran en las secciones principales son:
    </p>

    <!-- Categorías de acordes -->
    <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ route('pages.acordes-septima') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes de Séptima
        </a>
        <a href="{{ route('pages.acordes-extendidos') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Extendidos
        </a>
        <a href="{{ route('pages.acordes-suspendidos') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Suspendidos
        </a>
        <a href="{{ route('pages.acordes-disminuidos') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Disminuidos
        </a>
        <a href="{{ route('pages.acordes-aumentados') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Aumentados
        </a>
        <a href="{{ route('pages.acordes-agregados') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Agregados
        </a>
        <a href="{{ route('pages.acordes-alterados') }}" class="px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition dark:text-white">
            Acordes Alterados
        </a>
    </div>
</div>

<div id="page" class="mt-8">
    <!-- Sección Teoría -->
    <aside class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">Comprendiendo Nombres de Acordes Poco Comunes</h2>
        <p class="text-gray-800 dark:text-gray-300 text-xl mb-6 text-center">
            Además de las categorías mencionadas y los acordes mayores y menores, es posible que encuentres acordes adicionales. A continuación, se presentan ejemplos con explicaciones para ayudarte a comprenderlos:
        </p>

        <!-- Lista de ejemplos de nombres de acordes -->
        <ul class="list-disc list-inside text-gray-800 dark:text-gray-300 space-y-2">
            <li><span class="font-semibold text-primary dark:text-blue-400">CMin7:</span> Nombre alternativo para C menor séptima.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Gdom7:</span> Nombre alternativo para G séptima dominante (G7).</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">E△:</span> Símbolo alternativo para E mayor.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">A°:</span> Símbolo alternativo para A disminuido.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Aø:</span> Símbolo alternativo para A semi-disminuido.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">F(#5):</span> Nombre alternativo para F aumentado.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Fno3:</span> Acorde F mayor sin la tercera.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">E/G#:</span> Acorde E invertido con G# como nota de bajo.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">E7/B:</span> Acorde E séptima invertido con B como nota de bajo.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">C/D:</span> Acorde C mayor con D como nota de bajo.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">F/E:</span> Acorde F mayor con E como nota de bajo.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">C6/9:</span> Acorde C seis-nueve, también escrito como C6add9.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Abmaj7(#11):</span> Acorde Ab mayor séptima con undécima aumentada.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Dmaj9(add13):</span> Nombre alternativo para Dmaj13.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Bm11 add(m2):</span> Acorde B menor undécima con segunda menor añadida.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">B#9b5:</span> B sostenido novena con quinta disminuida.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">A#9#5:</span> A sostenido novena con quinta aumentada.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">D7b10:</span> Nombre alternativo para D7#9.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">D-7:</span> D menor séptima (el signo menos se usa a veces para menor).</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">D-9:</span> D menor novena.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">D-11:</span> D menor undécima.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">C/C:</span> Indica un acorde C mayor con la raíz duplicada en una octava inferior.</li>
            <li><span class="font-semibold text-primary dark:text-blue-400">Cm/C:</span> Indica un acorde C menor con la raíz duplicada en una octava inferior.</li>
        </ul>

        <!-- Enlace adicional -->
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
            <a href="{{ route('pages.simbolos-de-acordes') }}" class="text-primary dark:text-blue-400 hover:underline">
                Guía de nombres y símbolos de acordes &#8250;
            </a>
        </p>
    </aside>
</div>
@endsection
