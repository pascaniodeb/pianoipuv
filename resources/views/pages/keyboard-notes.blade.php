@extends('layouts.app')

@section('title', 'Notas en el Teclado')

@section('content')
<div id="content" class="p-6 bg-gray-50 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <!-- Imagen principal -->
    <div class="flex justify-center mb-6">
        <img src="{{ asset('backend/assets/images/keyboard_notes.png') }}" alt="Notas en el teclado" class="rounded-lg shadow-lg max-w-full h-auto">
    </div>

    <p class="text-lg text-gray-700 text-center mb-8">
        La imagen ilustra cómo se relacionan las teclas y las notas. Este patrón de doce notas se repite en todo el teclado. Elige en el menú superior para obtener acordes de piano para una nota específica.
    </p>

    <!-- Teclas Blancas -->
    <h2 class="text-2xl font-bold text-primary mb-4">Teclas Blancas</h2>
    <p class="text-gray-700 text-lg mb-6">
        Como puedes observar en el diagrama anterior, hay teclas blancas y negras en el teclado. Las teclas blancas son: C - D - E - F - G - A - B. Después de la nota B, el patrón comienza nuevamente en la siguiente <em>octava</em>, siguiendo el mismo orden.
        <br><br>
        Es interesante notar que en algunos países, la letra H se usa en lugar de la B. Por lo tanto, si encuentras nombres de acordes como “H”, “Hm”, “Hmaj7” o “Hsus”, ya sabes por qué.
    </p>

    <!-- Teclas Negras -->
    <h2 class="text-2xl font-bold text-secondary mb-4">Teclas Negras</h2>
    <p class="text-gray-700 text-lg mb-6">
        En el diagrama, puedes ver que cada tecla negra tiene dos nombres de nota. Cuando una tecla negra está por encima (a la derecha) de una tecla blanca, se le añade un sostenido (#). Cuando está por debajo (a la izquierda), se le añade un bemol (b).
        <br><br>
        Por ejemplo, la tecla negra entre C y D se llama C# (Do sostenido) o Db (Re bemol). El nombre cambia dependiendo de la escala o tonalidad en la que se utilice.
        <br><br>
        Cabe destacar que entre las notas E y F, así como entre B y C, no existen teclas negras. Por lo tanto, no hay notas como E# o Fb, ni B# o Cb.
    </p>

    <!-- Acordes en diferentes posiciones -->
    <h3 class="text-xl font-semibold text-primary mb-4">Acordes en diferentes posiciones del teclado</h3>
    <p class="text-gray-700 text-lg mb-6">
        Como mencionamos, las mismas notas se encuentran en varias posiciones a lo largo del teclado. Entonces, ¿cuál es la posición correcta para tocar un acorde específico?
        <br><br>
        La respuesta es que no hay una única posición correcta. Puedes tocar el acorde donde suene mejor. En la parte izquierda del teclado están las teclas de tono bajo, lo que produce un sonido más grave con mucho bajo. En el lado derecho, encuentras teclas de tono alto que producen sonidos con más agudos.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-8">
        <a href="{{ route('pages.notacion') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
            Ver también Acordes en notación estándar &#8250;
        </a>
    </div>
</div>
@endsection
