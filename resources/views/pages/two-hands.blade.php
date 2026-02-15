@extends('layouts.app')

@section('title', 'Acordes a dos manos')

@section('content')
<div id="content" class="container mx-auto p-4 dark:bg-gray-900 rounded-lg shadow-md">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center dark:text-white">
        @yield('title')
    </h1>

    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        <span class="entry font-medium">Tocar acordes con dos manos tiene dos razones: puede ser necesario cuando el acorde incluye muchas notas y puede crear un sonido más rico para otros acordes que también se pueden tocar con una mano.</span>
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Tríadas mayores y menores</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Se puede ejecutar una versión a dos manos de C mayor, con la mano izquierda tocando <b>C - G</b> y con la derecha tocando <b>E - G - C</b> en la siguiente octava.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">C</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/c_two_hands.png') }}" alt="C chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Una versión a dos manos de C menor se puede ejecutar de forma similar con la mano izquierda tocando <b>C - G</b> y con la derecha tocando correctamente <b>Eb - G - C</b>.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">Cm</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/cm_two_hands.png') }}" alt="Cm chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Las voces abiertas como estas en general suenan mejor cuando las notas del bajo no están demasiado cerca unas de otras.
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Acordes de séptima mayor y menor</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        El acorde <b>G7</b> se puede ejecutar con dos manos, con la mano izquierda tocando <b>G - D</b> y la mano derecha tocando <b>F - G - B</b> en la siguiente octava.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">G7</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/g7_two_hands.png') }}" alt="G7 chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        El acorde <b>Gmaj7</b> se puede ejecutar con dos manos, con la mano izquierda tocando <b>G - D</b> y la mano derecha tocando <b>F# - G - B</b> en la siguiente octava.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">Gmaj7</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/gmaj7_two_hands.png') }}" alt="Gmaj7 chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        El acorde <b>Gm7</b> se puede tocar con dos manos: la izquierda toca <b>G - D</b> y la derecha <b>F# - G - Bb</b> en la octava siguiente. La mano derecha puede omitir <b>G</b> para evitar la disonancia de las notas <b>F#</b> y <b>G</b> en la misma octava.
    </p>

    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">Gm7</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/gm7_two_hands.png') }}" alt="Gm7 chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Acordes extendidos</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Los acordes extendidos no deben tocarse con las dos manos porque es posible omitir notas y utilizar inversiones. Sin embargo, tocar estos acordes con las dos manos a menudo permite aprovechar el potencial de los sonidos coloridos.
    </p>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Esta es una opción para tocar acordes de novena dominante usando ambas manos, en este caso con todas las notas de quinta e incluyendo algunas inversiones.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">G9</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/g9_two_hands.png') }}" alt="G9 chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Esta es una opción para tocar acordes de 13ª dominante usando ambas manos, en este caso omitiendo la quinta, novena y undécima y duplicando la tónica.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">G13</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/g13_two_hands.png') }}" alt="G13 chord two hands diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300">
        Existen muchas posibilidades de formación de acordes con diez dedos. Como se dijo antes, trate de mantener cierta distancia desde la primera nota grave. Además, si se necesitan muchas notas cerca unas de otras, a menudo suenan mejor ubicadas en la parte media de la construcción del acorde.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.voces') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también voces &#8250;
        </a>
    </div>
</div>
@endsection
