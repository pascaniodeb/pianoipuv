@extends('layouts.app')

@section('title', 'Ejercicios de acordes')

@section('content')
<div id="content" class="container mx-auto px-4 py-8 dark:bg-gray-900">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
        <span class="text-blue-600 dark:text-blue-400 font-medium">A continuación se incluye una colección de ejercicios de acordes para piano.</span> Todos los ejercicios se basan en notación musical y se pueden abrir como archivos PDF.
    </p>

    <div class="space-y-8">
        <!-- Arpegios Section -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Arpegios</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                Los arpegios son acordes quebrados (acordes que se tocan con una nota a la vez). Esta es una forma común de utilizar los acordes.
            </p>
            <div class="space-y-4">
                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 1</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_1.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Arpegios en tríada para dos manos (.pdf)</a>
                    <p class="text-gray-700 dark:text-gray-300 mt-2">El primer ejercicio se divide en tres partes, con diferentes tonalidades (G mayor, D mayor y B mayor).</p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 2</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_2.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Arpegios en tríada con notas de paso (.pdf)</a>
                    <p class="text-gray-700 dark:text-gray-300 mt-2">
                        Este ejercicio utiliza cambios de acordes con notas de paso. Por ejemplo, <strong>B</strong> puede usarse como nota de paso entre un acorde <strong>C</strong> y un acorde <strong>A</strong>.
                    </p>
                    <div class="flex justify-center mt-4">
                        <img src="{{ asset('backend/assets/images/passing_notes.png') }}" alt="Notas de paso" class="max-w-full h-auto rounded shadow-md">
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 3</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_3.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Arpegios en tríada con notas de paso II (.pdf)</a>
                    <p class="text-gray-700 dark:text-gray-300 mt-2">
                        Este ejercicio presenta arpegios con una melodía más evidente, con énfasis en las dos manos.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 4</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_4.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Arpegios con acordes invertidos (.pdf)</a>
                    <p class="text-gray-700 dark:text-gray-300 mt-2">
                        Este ejercicio se basa en <a href="inversions" class="text-blue-600 dark:text-blue-400 hover:underline">acordes invertidos</a>, con énfasis en movimientos suaves entre acordes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Acordes de bloque Section -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Acordes de bloque</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Los acordes de bloque son acordes completos y son comunes en muchas situaciones.
            </p>
            <div>
                <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 5</h3>
                <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_5.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Notas graves con acordes en bloque (.pdf)</a>
                <p class="text-gray-700 dark:text-gray-300 mt-2">
                    Esta forma de tocar es un estilo de acompañamiento común, especialmente en compás de <strong>3/4</strong>.
                </p>
            </div>
        </section>

        <!-- Acorde y melodía Section -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Acorde y melodía</h2>
            <div>
                <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 6</h3>
                <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_6.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Acorde &amp; melodía (.pdf)</a>
                <p class="text-gray-700 dark:text-gray-300 mt-4">Escucha un ejemplo de este ejercicio:</p>
                <div class="flex justify-center mt-4">
                    <audio controls>
                        <source src="{{ asset('backend/assets/audio/chord_melody3.mp3') }}" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
        </section>

        <!-- Blues Section -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Blues</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Acordes y conceptos de ejecución para piano en estilo blues.
            </p>
            <div class="space-y-4">
                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 7</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_7.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">En los estilos del blues I (.pdf)</a>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Ejercicio 8</h3>
                    <a href="{{ asset('backend/assets/pdf/Ejercicio_de_acordes_8.pdf') }}" class="text-blue-600 dark:text-blue-400 hover:underline">En los estilos del blues II (.pdf)</a>
                </div>
            </div>
        </section>

        <!-- Enlace relacionado -->
        <div class="text-center mt-12">
            <a href="{{ route('pages.progresiones') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
                Ver también progresiones &#8250;
            </a>
        </div>
    </div>
</div>
@endsection
