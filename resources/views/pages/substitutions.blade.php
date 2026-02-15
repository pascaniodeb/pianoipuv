@extends('layouts.app')

@section('title', 'Acordes Extendidos')

@section('content')

    <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
            @yield('title')
        </h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            En el contexto de los acordes, una sustitución se refiere a un acorde que reemplaza a otro.
            Hay principalmente dos situaciones para las sustituciones de acordes: un acorde extendido reemplaza una tríada o
            un acorde alterado reemplaza un acorde del mismo tipo. Una tercera aproximación, menos común, es la
            <i>sustitución melódica</i>, que se explica más adelante en este artículo.
        </p>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            El método típico para las sustituciones es que usen la misma nota raíz que el acorde que están reemplazando. Por
            ejemplo,
            D7 podría ser sustituido por D13, pero no por A9. Este principio puede, sin embargo, flexibilizarse en algunos
            casos,
            reemplazando también la función del acorde. Por ejemplo, reemplazar el acorde I con un acorde iii.
        </p>

        <h2 class="text-xl font-semibold text-secondary dark:text-blue-400 mb-4">Tipos Comunes de Sustituciones de Acordes</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            Los acordes extendidos, como los de novena, undécima y decimotercera, se usan a menudo como sustituciones
            de tríadas regulares, acordes de séptima y otros acordes extendidos. Esto significa que una tríada de Do mayor
            puede ser sustituida por un Cmaj7, un C7 puede ser sustituido por un C9 o un C13, etcétera. Los acordes
            alternos,
            como el C7#9, también son comunes en el jazz.
        </p>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            En la mayoría de las sustituciones, tanto la nota raíz como la calidad del acorde permanecen iguales,
            aunque la calidad del acorde puede cambiar. Por ejemplo, C7 puede sustituir a C.
        </p>

        <h2 class="text-xl font-semibold text-secondary dark:text-blue-400 mb-4">Listas de Sustituciones de Acordes</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            A continuación, se presentan tablas con diferentes tipos de acordes y posibles sustituciones que pueden usarse:
        </p>
        <div class="overflow-x-auto mt-8">
            <table class="table-fixed w-full border-collapse border border-gray-300 dark:border-gray-700 text-sm">
                <caption class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Tabla 1. Lista de Sustituciones para Acordes Dominantes
                </caption>
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-800">
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acorde</th>
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acordes Extendidos</th>
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Alteraciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([['C7', ['C9', 'C11', 'C13'], ['C7-5', 'C7+5', 'C7-9', 'C7+9', 'C7+11']], ['D7', ['D9', 'D11', 'D13'], ['D7-5', 'D7+5', 'D7-9', 'D7+9', 'D7+11']], ['E7', ['E9', 'E11', 'E13'], ['E7-5', 'E7+5', 'E7-9', 'E7+9', 'E7+11']], ['F7', ['F9', 'F11', 'F13'], ['F7-5', 'F7+5', 'F7-9', 'F7+9', 'F7+11']], ['G7', ['G9', 'G11', 'G13'], ['G7-5', 'G7+5', 'G7-9', 'G7+9', 'G7+11']], ['A7', ['A9', 'A11', 'A13'], ['A7-5', 'A7+5', 'A7-9', 'A7+9', 'A7+11']], ['B7', ['B9', 'B11', 'B13'], ['B7-5', 'B7+5', 'B7-9', 'B7+9', 'B7+11']]] as $nota)
                        <tr class="text-gray-700 dark:text-gray-300">
                            <td class="border border-gray-300 dark:border-gray-700 p-2 font-medium">{{ $nota[0] }}</td>
                            <td class="border border-gray-300 dark:border-gray-700 p-2">
                                @foreach ($nota[1] as $extended)
                                    <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota[0][0]), 'variacion' => strtolower(str_replace($nota[0][0], '', $extended))]) }}"
                                        class="text-primary dark:text-blue-400 hover:underline">
                                        {{ $extended }}
                                    </a>,
                                @endforeach
                            </td>
                            <td class="border border-gray-300 dark:border-gray-700 p-2">
                                @foreach ($nota[2] as $altered)
                                    <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota[0][0]), 'variacion' => strtolower(str_replace($nota[0][0], '', $altered))]) }}"
                                        class="text-primary dark:text-blue-400 hover:underline">
                                        {{ $altered }}
                                    </a>,
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <table class="table-fixed w-full border-collapse border border-gray-300 dark:border-gray-700 text-sm mt-8">
                <caption class="text-lg font-semibold text-primary dark:text-blue-400 mb-2">Tabla 2. Lista de sustituciones de acordes mayores
                </caption>
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-800">
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acorde</th>
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Acordes Extendidos</th>
                        <th class="w-1/4 border border-gray-300 dark:border-gray-700 px-4 py-2 text-left text-gray-800 dark:text-white">Alteraciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([['Cmaj7', ['C6', 'Cmaj9', 'Cmaj13'], ['C6-9', 'Cmaj7#9']], ['Dmaj7', ['D6', 'Dmaj9', 'Dmaj13'], ['D6-9', 'Dmaj7#9']], ['Emaj7', ['E6', 'Emaj9', 'Emaj13'], ['E6-9', 'Emaj7#9']], ['Fmaj7', ['F6', 'Fmaj9', 'Fmaj13'], ['F6-9', 'Fmaj7#9']], ['Gmaj7', ['G6', 'Gmaj9', 'Gmaj13'], ['G6-9', 'Gmaj7#9']], ['Amaj7', ['A6', 'Amaj9', 'Amaj13'], ['A6-9', 'Amaj7#9']], ['Bmaj7', ['B6', 'Bmaj9', 'Bmaj13'], ['B6-9', 'Bmaj7#9']]] as $acorde)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="border border-gray-300 p-2 font-medium">{{ $acorde[0] }}</td>
                            <td class="border border-gray-300 p-2">
                                @foreach ($acorde[1] as $extended)
                                    <a href="{{ route('acorde.variacion', ['nota' => strtolower($acorde[0][0]), 'variacion' => strtolower(str_replace($acorde[0][0], '', $extended))]) }}"
                                        class="text-primary hover:underline">
                                        {{ $extended }}
                                    </a>,
                                @endforeach
                            </td>
                            <td class="border border-gray-300 p-2">
                                @foreach ($acorde[2] as $alteration)
                                <a href="{{ route('acorde.variacion', ['nota' => strtolower($acorde[0][0]), 'variacion' => strtolower(str_replace($acorde[0][0], '', $alteration))]) }}"
                                    class="text-primary hover:underline">
                                    {{ $alteration }}
                                </a>,
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="table-fixed w-full border-collapse border border-gray-300 text-sm mt-8">
                <caption class="text-lg font-semibold text-primary mb-2">
                    Table 3. Lista de sustituciones para acordes menores
                </caption>
                <thead>
                    <tr class="bg-gray-200">
                        <th class="w-1/4 border border-gray-300 px-4 py-2 text-left">Acorde</th>
                        <th class="w-1/4 border border-gray-300 px-4 py-2 text-left">Acordes Extendidos</th>
                        <th class="w-1/4 border border-gray-300 px-4 py-2 text-left">Otras Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['Cm7', ['Cm9', 'Cm11', 'Cm13'], ['Cm7b5', 'Cm6/9', 'Cm+5', 'CmMaj7', 'CmMaj9']],
                        ['Dm7', ['Dm9', 'Dm11', 'Dm13'], ['Dm7b5', 'Dm6/9', 'Dm+5', 'DmMaj7', 'DmMaj9']],
                        ['Em7', ['Em9', 'Em11', 'Em13'], ['Em7b5', 'Em6/9', 'Em+5', 'EmMaj7', 'EmMaj9']],
                        ['Fm7', ['Fm9', 'Fm11', 'Fm13'], ['Fm7b5', 'Fm6/9', 'Fm+5', 'FmMaj7', 'FmMaj9']],
                        ['Gm7', ['Gm9', 'Gm11', 'Gm13'], ['Gm7b5', 'Gm6/9', 'Gm+5', 'GmMaj7', 'GmMaj9']],
                        ['Am7', ['Am9', 'Am11', 'Am13'], ['Am7b5', 'Am6/9', 'Am+5', 'AmMaj7', 'AmMaj9']],
                        ['Bm7', ['Bm9', 'Bm11', 'Bm13'], ['Bm7b5', 'Bm6/9', 'Bm+5', 'BmMaj7', 'BmMaj9']]
                    ] as $acorde)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="border border-gray-300 p-2 font-medium">
                                {{ $acorde[0] }}
                            </td>
                            <td class="border border-gray-300 p-2">
                                @foreach ($acorde[1] as $extendido)
                                <a href="{{ route('acorde.variacion', ['nota' => strtolower($acorde[0][0]), 'variacion' => strtolower(str_replace($acorde[0][0], '', $extendido))]) }}"
                                    class="text-primary hover:underline">
                                    {{ $extendido }}
                                </a>,
                                @endforeach
                            </td>
                            <td class="border border-gray-300 p-2">
                                @foreach ($acorde[2] as $opcion)
                                    <a href="{{ route('acorde.variacion', ['nota' => strtolower($acorde[0][0]), 'variacion' => strtolower(str_replace($acorde[0][0], '', $opcion))]) }}"
                                        class="text-primary hover:underline">
                                        {{ $opcion }}
                                    </a>,
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
            Nota: Existen más posibilidades, y algunas sustituciones pueden ser atonales, lo que significa que el acorde sustituto podría incluir notas que no coinciden con la tonalidad principal.
        </p>

        <div class="mt-8">
            <!-- Sustitución melódica -->
            <h2 class="text-xl font-semibold text-secondary dark:text-blue-400 mb-4">Sustitución melódica</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-6">
                Las sustituciones melódicas son ligeramente diferentes, pero el concepto se mantiene. Al tocar melodías sobre acordes, como improvisar usando arpegios, se pueden usar acordes coincidentes. En lugar de tocar un arpegio de Do mayor sobre un acorde Cmaj7, se podría usar Em7. Las notas casi coinciden, y aunque la nota Re en Em7 no está incluida en Cmaj7, sí forma parte de la escala mayor de Do.
            </p>

            <!-- Aplicaciones en progresiones -->
            <h2 class="text-xl font-semibold text-secondary dark:text-blue-400 mb-4">Aplicaciones en progresiones</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-6">
                A continuación, se presentan algunos ejemplos de cómo podrían lucir progresiones que incluyen sustituciones:
            </p>

            <!-- Progresiones ii - V - I -->
            <div class="mt-4">
                <h3 class="text-md font-semibold text-secondary dark:text-blue-400">ii - V - I con sustituciones:</h3>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm mt-2 space-y-2">
                    <li><span class="font-semibold text-gray-700 dark:text-gray-300">Dm7</span> - <span class="font-semibold text-gray-700 dark:text-gray-300">G13</span> - <span class="font-semibold text-gray-700 dark:text-gray-300">Cmaj7</span></li>
                    <li><span class="font-semibold text-gray-700">Em7</span> - <span class="font-semibold text-gray-700">A7</span> - <span class="font-semibold text-gray-700">Dmaj9</span></li>
                    <li><span class="font-semibold text-gray-700">Gm9</span> - <span class="font-semibold text-gray-700">C7#5</span> - <span class="font-semibold text-gray-700">Fmaj9</span></li>
                    <li><span class="font-semibold text-gray-700">Am11</span> - <span class="font-semibold text-gray-700">D7</span> - <span class="font-semibold text-gray-700">Gmaj7</span></li>
                    <li><span class="font-semibold text-gray-700">Bbm7</span> - <span class="font-semibold text-gray-700">Eb7#9</span> - <span class="font-semibold text-gray-700">Abmaj7</span></li>
                    <li><span class="font-semibold text-gray-700">Cm7</span> - <span class="font-semibold text-gray-700">F9</span> - <span class="font-semibold text-gray-700">Bbmaj13</span></li>
                </ul>
            </div>

            <!-- Progresiones I - vi - ii - V -->
            <div class="mt-4">
                <h3 class="text-md font-semibold text-secondary">I - vi - ii - V con sustituciones:</h3>
                <ul class="list-disc list-inside text-gray-700 text-sm mt-2 space-y-2">
                    <li><span class="font-semibold text-gray-700">Cmaj7</span> - <span class="font-semibold text-gray-700">Am7</span> - <span class="font-semibold text-gray-700">Dm7</span> - <span class="font-semibold text-gray-700">G13</span></li>
                    <li><span class="font-semibold text-gray-700">Ebmaj7</span> - <span class="font-semibold text-gray-700">Cm7</span> - <span class="font-semibold text-gray-700">Fm9</span> - <span class="font-semibold text-gray-700">Bb11</span></li>
                    <li><span class="font-semibold text-gray-700">Dmaj9</span> - <span class="font-semibold text-gray-700">Bm11</span> - <span class="font-semibold text-gray-700">Em7</span> - <span class="font-semibold text-gray-700">A7</span></li>
                </ul>
            </div>

            <!-- Progresiones I - VI - ii - V -->
            <div class="mt-4">
                <h3 class="text-md font-semibold text-secondary">I - VI - ii - V con sustituciones:</h3>
                <ul class="list-disc list-inside text-gray-700 text-sm mt-2 space-y-2">
                    <li><span class="font-semibold text-gray-700">Cmaj7</span> - <span class="font-semibold text-gray-700">A7</span> - <span class="font-semibold text-gray-700">Dm7</span> - <span class="font-semibold text-gray-700">G13</span></li>
                    <li><span class="font-semibold text-gray-700">Dbmaj9</span> - <span class="font-semibold text-gray-700">Bb11</span> - <span class="font-semibold text-gray-700">Ebm7</span> - <span class="font-semibold text-gray-700">Ab7</span></li>
                    <li><span class="font-semibold text-gray-700">Ebmaj7</span> - <span class="font-semibold text-gray-700">C7</span> - <span class="font-semibold text-gray-700">Fm9</span> - <span class="font-semibold text-gray-700">Bb11</span></li>
                </ul>
            </div>


            <!-- Enlace relacionado -->
            <div class="text-center mt-12">
                <a href="{{ route('pages.voces') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
                    Ver también voces &#8250;
                </a>
            </div>
        </div>


    </div>



@endsection
