@extends('layouts.app')

@section('title', 'Tipos de Acordes')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <!-- Introducción -->
    <p class="text-lg text-gray-700 dark:text-gray-300 text-center mb-6">
        Las tríadas, los acordes de cuatro notas, los acordes de cinco notas y las alteraciones son las principales categorías de acordes.
    </p>

    <!-- Sección de Tríadas -->
    <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-4">Tríadas</h2>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Una tríada es un acorde que consta de tres notas. Existen cuatro tipos principales de tríadas:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Mayor:</strong> raíz, tercera mayor y quinta perfecta.</li>
        <li><strong>Menor:</strong> raíz, tercera menor y quinta perfecta.</li>
        <li><strong>Aumentada:</strong> raíz, tercera mayor y quinta aumentada.</li>
        <li><strong>Disminuida:</strong> raíz, tercera menor y quinta disminuida.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        "Raíz" se refiere a la primera nota, y el resto son términos para describir los intervalos de una escala. Puedes entender mejor estas tríadas observando los diagramas de acordes disponibles en este sitio.
    </p>

    <!-- Acordes de cuatro notas -->
    <h3 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4">Acordes de Cuatro Notas</h3>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los tres tipos más comunes de acordes de cuatro notas son:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Séptima Mayor:</strong> raíz, tercera mayor, quinta perfecta y séptima mayor.</li>
        <li><strong>Séptima Menor:</strong> raíz, tercera menor, quinta perfecta y séptima menor.</li>
        <li><strong>Séptima Dominante:</strong> raíz, tercera mayor, quinta perfecta y séptima menor.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Estos acordes reciben su nombre debido a la séptima nota añadida sobre la raíz en la escala correspondiente.
    </p>

    <!-- Acordes de cinco notas -->
    <h3 class="text-xl font-bold text-primary dark:text-blue-400 mb-4">Acordes de Cinco Notas</h3>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Los tres tipos más comunes de acordes de cinco notas son:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Novena Mayor:</strong> raíz, tercera mayor, quinta perfecta, séptima mayor y novena mayor.</li>
        <li><strong>Novena Menor:</strong> raíz, tercera menor, quinta perfecta, séptima menor y novena mayor.</li>
        <li><strong>9ª Dominante:</strong> raíz, tercera mayor, quinta perfecta, séptima menor y novena mayor.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Aunque estos acordes no son tan comunes como las tríadas o los acordes de cuatro notas, ofrecen una rica complejidad armónica.
    </p>

    <!-- Acordes de seis y siete notas -->
    <h3 class="text-xl font-bold text-secondary dark:text-gray-200 mb-4">Acordes de Seis y Siete Notas</h3>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        En esta categoría encontramos los acordes undécimos y decimoterceros:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Dominante 11:</strong> raíz, tercera mayor, quinta perfecta, séptima menor, novena mayor y undécima mayor.</li>
        <li><strong>13ª Mayor:</strong> raíz, tercera mayor, quinta perfecta, séptima mayor, novena mayor, undécima mayor y decimotercera mayor.</li>
        <li><strong>9ª Dominante Extendida:</strong> raíz, tercera mayor, quinta perfecta, séptima menor, novena mayor, undécima mayor y decimotercera mayor.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Estos acordes suelen dividirse en poliacordes, tocados por cada mano como dos acordes más pequeños.
    </p>

    <!-- Alteraciones -->
    <h3 class="text-xl font-bold text-primary dark:text-blue-400 mb-4">Alteraciones</h3>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-4">
        Las alteraciones modifican una nota subiéndola o bajándola un semitono. Ejemplos incluyen:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li><strong>Séptima Mayor (b5):</strong> raíz, tercera mayor, quinta disminuida y séptima mayor.</li>
        <li><strong>Séptima Mayor (#5):</strong> raíz, tercera mayor, quinta aumentada y séptima mayor.</li>
    </ul>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        Estas alteraciones añaden riqueza y variedad a la composición musical.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.construccion-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
            Ver también cómo construir acordes &#8250;
        </a>
    </div>
</div>
@endsection
