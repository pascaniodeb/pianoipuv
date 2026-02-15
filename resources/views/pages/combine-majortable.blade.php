@extends('layouts.app')

@section('title', 'Progresiones')

@section('content')
<div class="container mx-auto p-4 dark:bg-gray-900">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Una vez que aprendas los acordes, desearás combinarlos para crear música armoniosa. Si bien la guitarra puede ser conocida como el instrumento definitivo para acordes, en el piano puedes enriquecer los acordes añadiendo melodías. Aprender a combinar acordes en el piano es clave para desarrollar una música atractiva y dinámica.
    </p>

    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progresiones de acordes – acordes que encajan</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Para evitar disonancias al cambiar de un acorde a otro, mantente en la misma tonalidad. La siguiente tabla te muestra combinaciones posibles:
    </p>

    <div class="overflow-x-auto mb-6">
        <table class="table-auto border-collapse border border-gray-300 dark:border-gray-700 w-full text-sm text-center">
            <caption class="text-gray-700 dark:text-gray-300 font-semibold my-2">Tabla 1: Claves mayores y "acordes vecinos"</caption>
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white">
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">I</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">ii</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">iii</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">IV</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">V</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">vi</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">VII</th>
                </tr>
            </thead>
            <tbody>
                @foreach ([
                    ['C', 'Dm', 'Em', 'F', 'G', 'Am', 'Bdim'],
                    ['D', 'Em', 'F#m', 'G', 'A', 'Bm', 'C#dim'],
                    ['E', 'F#m', 'G#m', 'A', 'B', 'C#m', 'D#dim'],
                    ['F', 'Gm', 'Am', 'Bb', 'C', 'Dm', 'Edim'],
                    ['G', 'Am', 'Bm', 'C', 'D', 'Em', 'F#dim'],
                    ['A', 'Bm', 'C#m', 'D', 'E', 'F#m', 'G#dim'],
                    ['B', 'C#m', 'D#m', 'E', 'F#', 'G#m', 'A#dim']
                ] as $row)
                    <tr class="text-gray-700 dark:text-gray-300">
                        @foreach ($row as $cell)
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Los números romanos representan las funciones armónicas: mayúsculas para acordes mayores (I, IV, V) y minúsculas para menores (ii, iii, vi). Por ejemplo, puedes construir progresiones como:
    </p>
    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-6">
        <li>C – Em – Am – F – G</li>
        <li>G – Em – C – D</li>
        <li>Dm – Gm – F – C</li>
    </ul>

    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Transponer a otras tonalidades</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-4">
        Cambiar una progresión a otra tonalidad manteniendo las relaciones entre los acordes es posible con la siguiente tabla:
    </p>

    <div class="overflow-x-auto mb-6">
        <table class="table-auto border-collapse border border-gray-300 dark:border-gray-700 w-full text-sm text-center">
            <caption class="text-gray-700 dark:text-gray-300 font-semibold my-2">Tabla 2: Tabla de transposición de teclas</caption>
            <tbody>
                @foreach ([
                    ['C#', 'D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B'],
                    ['D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C'],
                    ['Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C', 'C#'],
                    ['E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C', 'C#', 'D'],
                    ['F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C', 'C#', 'D', 'Eb'],
                    ['F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C', 'C#', 'D', 'Eb', 'E'],
                    ['G', 'Ab', 'A', 'Bb', 'B', 'C', 'C#', 'D', 'Eb', 'E', 'F'],
                    ['Ab', 'A', 'Bb', 'B', 'C', 'C#', 'D', 'Eb', 'E', 'F', 'F#'],
                    ['A', 'Bb', 'B', 'C', 'C#', 'D', 'Eb', 'E', 'F', 'F#', 'G'],
                    ['Bb', 'B', 'C', 'C#', 'D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab'],
                    ['B', 'C', 'C#', 'D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A'],
                    ['C', 'C#', 'D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb']
                ] as $row)
                    <tr class="text-gray-700 dark:text-gray-300">
                        @foreach ($row as $cell)
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progresiones de jazz y blues</h2>
    <p class="text-justify text-gray-700 dark:text-gray-300 mb-6">
        Progresiones como ii-V-I son comunes en el jazz: por ejemplo, Dm7 - G7 - Cmaj7. En el blues, las progresiones de 12 compases son estándares, utilizando tríadas y acordes séptimos.
    </p>

    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progresiones con audio</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mb-8">
        @foreach ([
            ['C - C7 - Fmaj7 - F6 - G', 'C_C7_Fmaj7_F6_G.mp3'],
            ['F - Dm - Gm - Bb', 'F_Dm_Gm_Bb.mp3'],
            ['G - B7 - Em - G7 - C - D7 - G', 'G_B7_Em_G7_C_D7_G.mp3'],
            ['A - D - E - D - A', 'A_D_E_D_A.mp3'],
            ['Amaj7 - F#m7 - Bm7 - E7', 'Amaj7_Fsharpm7_Bm7_E7.mp3'],
            ['B - B/A# - E', 'B_BAsharp_E.mp3'],
            ['Am11 - Cmaj13 - D9 - Fmaj7', 'Am11_Cmaj13_D9_Fmaj7.mp3'],
            ['Cm - Bb - Fm', 'Cm_Bb_Fm.mp3'],
            ['Dm - F - Gm - Bb', 'Dm_F_Gm_Bb.mp3'],
            ['Em - Am7/E - D/F# - G', 'Em_Am7E_DFsharp_G.mp3'],
        ] as $example)
            <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm bg-white dark:bg-gray-800 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">{{ $example[0] }}</h3>
                <audio controls class="w-full">
                    <source src="{{ asset('backend/assets/audio/' . $example[1]) }}" type="audio/mpeg">
                    Tu navegador no soporta el elemento de audio.
                </audio>
            </div>
        @endforeach
    </div>


    <!--
    <h2 class="text-xl font-semibold mb-4">Ebook de progresiones</h2>
    <div class="flex items-center gap-4 mb-6">
        <img src="{{ asset('backend/assets/images/ebook_400pcp_cover.jpg') }}" alt="400 Piano Chord Progressions ebook cover" class="w-32 rounded-lg shadow-md">
        <p class="text-gray-700">
            Este libro contiene 400 progresiones con ejemplos de audio y conceptos de acompañamiento.
            <a href="https://payhip.com/b/AnZy" class="text-primary dark:text-blue-400 font-medium underline hover:text-indigo-600 dark:hover:text-blue-300">Comprar por 4 $USD</a>.
        </p>
    </div>-->

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.ruptura-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también Ruptura de Acordes &#8250;
        </a>
    </div>
</div>
@endsection
