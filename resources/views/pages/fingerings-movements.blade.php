@extends('layouts.app')

@section('title', 'Digitaciones y movimientos')

@section('content')
<div class="container mx-auto px-4 py-6 dark:bg-gray-900">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed mb-6">
        Cuando tocas acordes en el piano, es importante usar los dedos correctos. La razón para esto no es que un acorde no se pueda tocar de otra manera, sino que los movimientos entre diferentes acordes deben ser fluidos y cómodos.
    </p>

    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">La utilidad de los acordes invertidos</h2>
    <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed mb-6">
        Una práctica común al tocar acordes en el piano es el uso de
        <a href="{{ route('pages.inversiones') }}" class="text-primary dark:text-blue-400 hover:underline">acordes invertidos</a>, que son versiones alternativas de un acorde con los tonos en diferente orden.
        <br><br>
        Las progresiones de acordes pueden ser mucho más eficientes en cuanto a movimientos si se incluyen acordes invertidos. Las imágenes a continuación ilustran cómo involucrar toda la mano, permitiendo un cambio más rápido y preciso entre acordes:
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="text-center">
            <img src="{{ asset('backend/assets/images/picture_c_chord.jpg') }}" alt="Acorde de C mayor en piano" class="w-full rounded shadow">
            <span class="block mt-4 text-sm text-gray-600 dark:text-gray-400">Acorde de C con dedo anular e índice "en espera"</span>
        </div>
        <div class="text-center">
            <img src="{{ asset('backend/assets/images/picture_g_b_chord.jpg') }}" alt="Acorde de G/B en piano" class="w-full rounded shadow">
            <span class="block mt-4 text-sm text-gray-600 dark:text-gray-400">Cambio a G/B con un pequeño movimiento</span>
        </div>
        <div class="text-center">
            <img src="{{ asset('backend/assets/images/picture_f_c_chord.jpg') }}" alt="Acorde de F/C en piano" class="w-full rounded shadow">
            <span class="block mt-4 text-sm text-gray-600 dark:text-gray-400">Cambio a F/C con otro pequeño movimiento</span>
        </div>
    </div>

    <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed mb-6">
        La secuencia de acordes en las imágenes anteriores es C - G - F, pero con notas graves alternativas. Este enfoque reduce la necesidad de "saltar" entre los acordes, mejorando la fluidez al tocar.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.progresiones') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también progresiones &#8250;
        </a>
    </div>
</div>
@endsection
