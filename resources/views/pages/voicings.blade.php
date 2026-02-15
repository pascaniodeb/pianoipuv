@extends('layouts.app')

@section('title', 'Voces')

@section('content')
<div id="content" class="container mx-auto p-4 dark:bg-gray-900 rounded-lg shadow-md">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center dark:text-white">
        @yield('title')
    </h1>

    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Con <b>voces</b> nos referimos a cómo se organiza un acorde y cómo se distribuyen las notas. Las voces son, por tanto, desviaciones de la variación principal de un acorde y podrían ser, por ejemplo, una versión que se toca en octavas diferentes con una nota omitida (eliminada del acorde).
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Tríada sobre voces de raíz</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Una tríada simple podría verse así:
    </p>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/c_voicing.png') }}" alt="C chord voicing diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        En lugar de tocar el acorde normal de C mayor con notas <b>C, E y G</b> en una octava, la mano izquierda toca la nota fundamental en una octava inferior, mientras que la mano derecha toca la tríada. Esto se llama <b>tríada sobre la nota fundamental</b> y agrega algunos graves adicionales y, con ello, más profundidad.
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Parte sobre las voces de la raíz</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Cuando se trata de acordes de cuatro notas, un método es separarlos en dos partes. La mano izquierda toca la tónica mientras que la mano derecha toca el resto:
    </p>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/cmaj7_voicing.png') }}" alt="Cmaj7 chord voicing diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        La sonoridad <b>Cmaj7</b> anterior agregará profundidad al acorde gracias al espacio más amplio entre los graves y los agudos.
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Voces cerradas y abiertas</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Ambos ejemplos anteriores podrían considerarse <b>voces abiertas</b>, ya que las notas se distribuyen en un amplio rango. El acorde <b>C11</b> podría tocarse tanto con una voz cerrada como abierta.
    </p>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">C11 Voz cerrada</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/c11_inversion.png') }}" alt="C11 chord voicing closed diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <h3 class="text-lg font-medium mb-2 text-gray-700 dark:text-gray-300">C11 Voz abierta</h3>
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/c11_voicing.png') }}" alt="C11 chord voicing open diagram" class="rounded-lg shadow-md w-full max-w-2xl" />
    </div>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Las voces cerradas y abiertas suelen estar presentes en las progresiones, lo que puede ayudar a crear un movimiento fluido. Se pueden utilizar distintas voces en distintas situaciones en las que la nota más alta del acorde coincida con la nota de la melodía.
    </p>

    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Voces sin raíces</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Un acorde sin la raíz puede parecer una contradicción, pero es posible siempre que se incluyan otras notas importantes en el acorde. Se puede ver como que la sonoridad implica el acorde, ya que las otras notas importantes siguen estando ahí.
    </p>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Entonces, ¿por qué tocar voces sin raíz? Una razón es que la nota raíz puede reemplazarse con otra nota que extiende el acorde y lo hace más colorido. Los acordes pueden extenderse sin aumentar el número de notas, lo que reduce los dedos involucrados. En los casos en que interviene un bajista, él se ocupará de las raíces.
    </p>

    <h3 class="text-lg font-medium mb-4 text-gray-800 dark:text-white">Ejemplos de digitaciones de acordes</h3>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Puedes descargar este <a href="{{ asset('backend/assets/pdf/Voicings.pdf') }}" class="text-primary font-medium underline hover:text-indigo-600 dark:text-blue-400 dark:hover:text-blue-300">Archivo PDF</a>, que incluye progresiones con acordes de séptima y extendidos tocados como voces.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.acordes-a-dos-manos') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también acordes a dos manos &#8250;
        </a>
    </div>
</div>
@endsection
