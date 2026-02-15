@extends('layouts.app')

@section('title', 'Información del diagrama de acordes')

@section('content')
<div id="content" class="container mx-auto p-4 dark:bg-gray-900">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center mb-8">@yield('title')</h1>

    <p class="mb-6 text-justify text-gray-700 dark:text-gray-300">
        <span class="entry font-medium">La forma más fácil de aprender acordes sin un instructor es estudiar imágenes con ilustraciones de acordes. Para simplificar las imágenes y hacer que sean más fáciles de interpretar, pianoipuv.org utiliza diagramas con un color rojo que marca las teclas para tocar.</span>
        <br /><br />
        Al observar las dos imágenes, puede comparar una imagen realista con el diagrama y comprender fácilmente cómo leer diagramas de acordes en este sitio.
    </p>

    <div class="flex flex-wrap justify-center items-center gap-6">
        <div class="max-w-sm">
            <img src="{{ asset('backend/assets/images/picture_c_chord.jpg') }}" alt="Fingers pressing down a chord" class="rounded-lg shadow-md" />
            <p class="text-center mt-2 text-gray-600 dark:text-gray-400">Imagen de dedos tocando un acorde de C mayor</p>
        </div>
        <div class="max-w-sm">
            <img src="{{ asset('backend/assets/images/c.png') }}" alt="keyboard" class="rounded-lg shadow-md" />
            <p class="text-center mt-2 text-gray-600 dark:text-gray-400">Diagrama del acorde de C mayor</p>
        </div>
    </div>

    <p class="mt-6 text-justify text-gray-700 dark:text-gray-300">
        Para tocar el acorde, presione todas las teclas de color rojo simultáneamente.
    </p>

    <h2 class="text-xl font-semibold mt-10 mb-4 text-gray-900 dark:text-white">Nombres de acordes y notas</h2>
    <p class="mb-6 text-justify text-gray-700 dark:text-gray-300">
        En este sitio verás los nombres de los acordes junto con las notas del acorde:
    </p>
    <div class="flex justify-center">
        <img src="{{ asset('backend/assets/images/chord_info.png') }}" alt="Piano chord picture and information" class="rounded-lg shadow-md w-full max-w-3xl" />
    </div>
    <p class="mt-4 text-justify text-gray-700 dark:text-gray-300">
        Puede encontrar información sobre el significado de los diferentes nombres de acordes en otras partes de este sitio y también puede encontrar información específica sobre el acorde en las páginas donde se presentan.
    </p>

    <h2 class="text-xl font-semibold mt-10 mb-4 text-gray-900 dark:text-white">¿Dónde colocar las manos en el teclado?</h2>
    <p class="mb-6 text-justify text-gray-700 dark:text-gray-300">
        Es posible que hayas observado que los diagramas solo constan de 24 teclas (2 octavas) cuando un piano de tamaño completo contiene 88 teclas. El caso es que puedes tocar lo que quieras. No hay nada correcto o incorrecto, pero es preferible que coloques las manos en algún lugar del medio. Si las colocas demasiado en el lado izquierdo, se producirán demasiados graves y si las colocas demasiado en el derecho, se producirán demasiados agudos.
    </p>

    <h2 class="text-xl font-semibold mt-10 mb-4 text-gray-900 dark:text-white">Acordes con notas en partituras musicales</h2>
    <div class="flex flex-wrap justify-center items-center gap-6">
        <div class="max-w-sm">
            <img src="{{ asset('backend/assets/images/c_chord_notes.png') }}" alt="C chord notes in music sheet" class="rounded-lg shadow-md" />
            <p class="text-center mt-2 text-gray-600 dark:text-gray-400">Acorde de Do mayor en partitura musical</p>
        </div>
    </div>
    <p class="mt-4 text-justify text-gray-700 dark:text-gray-300">
        En las partituras musicales, los acordes se pueden mostrar con notas apiladas. La imagen de arriba es de una partitura musical y muestra un acorde de Do mayor con las notas C, E y G apiladas. A continuación también se pueden ver las digitaciones. Para practicar acordes con la ayuda de partituras musicales, consulte el libro electrónico gratuito
        <a href="Practica&#32;Acordes&#32;Piano.pdf" class="text-primary dark:text-blue-400 font-medium underline hover:text-indigo-600 dark:hover:text-blue-300">Práctica Acordes de Piano</a>.
    </p>

    <div class="mt-6 text-center">
        <a href="{{ route('pages.notas-del-teclado') }}" class="text-primary dark:text-blue-400 font-medium underline hover:text-indigo-600 dark:hover:text-blue-300">Ver también notas en el teclado &#8250;</a>
    </div>
</div>
@endsection
