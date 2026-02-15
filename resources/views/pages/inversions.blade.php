@extends('layouts.app')

@section('title', 'Inversiones')

@section('content')
    <div id="content" class="container mx-auto px-4 py-6 dark:bg-gray-900">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
            @yield('title')
        </h1>
        <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 mb-6">
            Cuando aprendas a tocar acordes, te resultará muy beneficioso entender cómo usar las inversiones.
            Un acorde invertido es el mismo acorde pero tocado con las notas del acorde en un orden diferente,
            y la nota grave reemplazada.
        </p>

        <!-- Sección 1 -->
        <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold text-primary dark:text-blue-400 mb-4">Inversiones de una tríada</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                Empezamos con el acorde de C mayor. Se puede tocar de tres maneras:
            </p>
            <ul class="list-disc pl-5 text-gray-700 dark:text-gray-300 space-y-2">
                <li><span class="font-bold">Posición de raíz:</span> C - E - G (C es la nota más grave)</li>
                <li><span class="font-bold">Primera inversión:</span> E - G - C (E es la nota más grave)</li>
                <li><span class="font-bold">Segunda inversión:</span> G - C - E (G es la nota más grave)</li>
            </ul>
            <p class="text-gray-700 dark:text-gray-300 mt-4">
                Esto también se aplica a los acordes menores, como Cm, que usa las mismas inversiones pero con Eb en lugar de E.
            </p>
        </div>

        <div class="mb-8">
            <img src="{{ asset('backend/assets/images/notes_c_inversions.png') }}" loading="lazy"
                alt="C major inversions in notation"
                class="mx-auto rounded-lg shadow-md">
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mt-4">
                La imagen ilustra los mismos acordes y cómo se pueden tocar en notación estándar
                (clave de sol). Los números escritos debajo de los símbolos de las notas indican las digitaciones:
                pulgar (1), índice (2), dedo medio (3) y meñique (5) para la mano derecha.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">¿Por qué utilizar acordes invertidos?</h2>
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                Usar acordes invertidos minimiza los movimientos de tu mano, permitiendo tocar <em>más rápido</em>.
                Además, facilita tocar sin mirar el teclado. Las inversiones también ayudan a crear líneas de bajo más
                fluidas y armonías más agradables, optimizando los movimientos entre acordes.
            </p>
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mt-4">
                Por ejemplo, una progresión como <strong>C - G - Am - F - E - C</strong> se puede reorganizar como
                <strong>C - G/B - Am - F/A - E/B - C</strong>, lo que en muchas situaciones sonará mejor.
            </p>
        </div>
        <div id="content" class="container mx-auto px-4 py-6">
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Tríadas: son posibles dos inversiones</h2>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                    En el caso de las tríadas (acordes con tres notas), son posibles dos inversiones.
                    A continuación, se muestran listas de todos los acordes mayores y menores con sus inversiones:
                </p>

                <!-- Tabla de acordes mayores -->
                <table class="w-full table-auto border-collapse border border-gray-300 dark:border-gray-700 mt-4 mb-6">
                    <caption class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Tabla 1. Acordes mayores con inversiones</caption>
                    <thead class="bg-gray-100 dark:bg-gray-800">
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acorde</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">1ra. Inversión</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">2da. Inversión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['C', 'C/E', 'C/G'],
                            ['C#', 'C#/F', 'C#/G#'],
                            ['D', 'D/F#', 'D/A'],
                            ['E', 'E/G#', 'E/B'],
                            ['F', 'F/A', 'F/C'],
                            ['G', 'G/B', 'G/D'],
                            ['A', 'A/C#', 'A/E'],
                            ['B', 'B/D#', 'B/F#'],
                        ] as $row)
                            <tr class="text-gray-700 dark:text-gray-300">
                                @foreach ($row as $cell)
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $cell }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Tabla de acordes menores -->
                <table class="w-full table-auto border-collapse border border-gray-300 dark:border-gray-700 mt-4 mb-6">
                    <caption class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Tabla 2. Acordes menores con inversiones</caption>
                    <thead class="bg-gray-100 dark:bg-gray-800">
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acorde</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">1ra. Inversión</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">2da. Inversión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['Cm', 'Cm/Eb', 'Cm/G'],
                            ['C#m', 'C#m/E', 'C#m/G#'],
                            ['Dm', 'Dm/F', 'Dm/A'],
                            ['Em', 'Em/G', 'Em/B'],
                            ['Fm', 'Fm/Ab', 'Fm/C'],
                            ['Gm', 'Gm/Bb', 'Gm/D'],
                            ['Am', 'Am/C', 'Am/E'],
                            ['Bm', 'Bm/D', 'Bm/F#'],
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

            <!-- Sección 2 -->
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-semibold text-primary dark:text-blue-400 mb-4">Inversiones de un acorde de séptima</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    Los acordes de cuatro notas tienen tres inversiones. Tomando como ejemplo el acorde G7:
                </p>
                <ul class="list-disc pl-5 text-gray-700 dark:text-gray-300 space-y-2">
                    <li><span class="font-bold">Posición de raíz:</span> G - B - D - F</li>
                    <li><span class="font-bold">Primera inversión:</span> B - D - F - G (G7/B)</li>
                    <li><span class="font-bold">Segunda inversión:</span> D - F - G - B (G7/D)</li>
                    <li><span class="font-bold">Tercera inversión:</span> F - G - B - D (G7/F)</li>
                </ul>
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Acordes de cuatro notas: tres inversiones posibles</h2>
                <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                    Para un acorde de cuatro notas, son posibles tres inversiones. Aquí tienes una lista de acordes de séptima dominante con inversiones:
                </p>

                <!-- Tabla de acordes de séptima -->
                <table class="w-full table-auto border-collapse border border-gray-300 dark:border-gray-700 mt-4">
                    <caption class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Tabla 3. Acordes de séptima dominante con inversiones</caption>
                    <thead class="bg-gray-100 dark:bg-gray-800">
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acorde</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">1ra. Inversión</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">2da. Inversión</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">3ra. Inversión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['C7', 'C7/E', 'C7/G', 'C7/Bb'],
                            ['D7', 'D7/F#', 'D7/A', 'D7/C'],
                            ['E7', 'E7/G#', 'E7/B', 'E7/D'],
                            ['F7', 'F7/A', 'F7/C', 'F7/Eb'],
                            ['G7', 'G7/B', 'G7/D', 'G7/F'],
                            ['A7', 'A7/C#', 'A7/E', 'A7/G'],
                            ['B7', 'B7/D#', 'B7/F#', 'B7/A'],
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

            <!-- Tabla Menor -->
            <h4 class="text-md font-bold text-gray-800 dark:text-gray-200 mb-2">Acordes Menores</h4>
            <div class="overflow-x-auto mb-6">
                <table class="table-auto border-collapse border border-gray-300 dark:border-gray-700 w-full text-sm text-center">
                    <thead>
                        <tr class="bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-white">
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Acorde</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Raíz</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">1ª Inversión</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">2ª Inversión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['Cm', 'C - Eb - G', 'Eb - G - C', 'G - C - Eb'],
                            ['Dm', 'D - F - A', 'F - A - D', 'A - D - F'],
                            ['Em', 'E - G - B', 'G - B - E', 'B - E - G'],
                            ['Fm', 'F - Ab - C', 'Ab - C - F', 'C - F - Ab'],
                            ['Gm', 'G - Bb - D', 'Bb - D - G', 'D - G - Bb'],
                            ['Am', 'A - C - E', 'C - E - A', 'E - A - C'],
                            ['Bm', 'B - D - F#', 'D - F# - B', 'F# - B - D']
                        ] as $row)
                            <tr class="text-gray-700 dark:text-gray-300">
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold">{{ $row[0] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $row[1] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $row[2] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $row[3] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Enlace relacionado -->
            <div class="text-center mt-12">
                <a href="{{ route('pages.voces') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
                    Ver también voces &#8250;
                </a>
            </div>
        </div>

    </div>

@endsection
