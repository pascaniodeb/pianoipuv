@extends('layouts.app')

@section('title', 'Acordes Extendidos')

@section('content')
<div class="container mx-auto p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
        Los acordes de novena, undécima y decimotercera son conocidos como <span class="font-semibold text-indigo-600 dark:text-indigo-400">acordes extendidos</span>
        debido a que se construyen extendiendo un acorde de séptima con una o más terceras un octavo más alto.
        Un acorde de séptima dominante se extiende con una tercera mayor para formar un acorde de novena.
        Este, a su vez, se extiende con una tercera menor para formar un acorde de undécima,
        y finalmente, el acorde de undécima se extiende con una tercera mayor para construir un acorde de decimotercera.
    </p>

    <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Diagramas de acordes extendidos:</h2>

    <div class="flex flex-wrap justify-center gap-3 mb-6">
        <span class="w-full text-center text-gray-600 dark:text-gray-400 font-medium mb-2">Acordes de 9ª</span>
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '9']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 group-hover:from-indigo-400 group-hover:to-purple-500"></span>
                <span class="relative z-10">{{ $nota }}9</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-6">
        <span class="w-full text-center text-gray-600 dark:text-gray-400 font-medium mb-2">Acordes de 11ª</span>
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '11']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-600 transition-all duration-300 group-hover:from-amber-400 group-hover:to-orange-500"></span>
                <span class="relative z-10">{{ $nota }}11</span>
            </a>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        <span class="w-full text-center text-gray-600 dark:text-gray-400 font-medium mb-2">Acordes de 13ª</span>
        @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
            <a href="{{ route('acorde.variacion', ['nota' => strtolower($nota), 'variacion' => '13']) }}"
               class="group relative px-5 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-rose-500 to-pink-600 transition-all duration-300 group-hover:from-rose-400 group-hover:to-pink-500"></span>
                <span class="relative z-10">{{ $nota }}13</span>
            </a>
        @endforeach
    </div>

    <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-md mb-10">
        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 text-center">Teoría sobre Acordes Extendidos</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
            Como se mencionó anteriormente, los acordes extendidos (novena, undécima y decimotercera) se forman extendiendo
            acordes de séptima con una o más terceras adicionales. Las cifras numéricas indican la distancia entre la nota raíz
            y la última nota del acorde.
        </p>

        <div class="p-6 bg-white dark:bg-slate-800 rounded-2xl shadow-sm mb-8">
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6 text-center">Comparación de Acordes Extendidos en Do</h3>
            <div class="space-y-6">
                <div class="text-center">
                    <p class="font-medium text-gray-700 dark:text-gray-300 mb-3"><span class="font-bold text-indigo-600 dark:text-indigo-400">C7:</span> C – E – G – Bb</p>
                    <img src="{{ asset('backend/assets/images/c7.png') }}" alt="Acorde C7" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                </div>
                <div class="text-center">
                    <p class="font-medium text-gray-700 dark:text-gray-300 mb-3"><span class="font-bold text-indigo-600 dark:text-indigo-400">C9:</span> C – E – G – Bb – D</p>
                    <img src="{{ asset('backend/assets/images/c9.png') }}" alt="Acorde C9" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                </div>
                <div class="text-center">
                    <p class="font-medium text-gray-700 dark:text-gray-300 mb-3"><span class="font-bold text-indigo-600 dark:text-indigo-400">C11:</span> C – E – G – Bb – D – F</p>
                    <img src="{{ asset('backend/assets/images/c11.png') }}" alt="Acorde C11" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                </div>
                <div class="text-center">
                    <p class="font-medium text-gray-700 dark:text-gray-300 mb-3"><span class="font-bold text-indigo-600 dark:text-indigo-400">C13:</span> C – E – G – Bb – D – F – A</p>
                    <img src="{{ asset('backend/assets/images/c13.png') }}" alt="Acorde C13" class="w-full max-w-xs mx-auto rounded-xl shadow-md" />
                </div>
            </div>
        </div>

        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            ¿Cómo se tocan acordes con seis o más notas? La respuesta es omitir una o más notas y, en muchos casos, tocar el acorde invertido
            (reorganizando el orden de las notas). También es común usar <span class="font-semibold text-indigo-600 dark:text-indigo-400">voicings poliacordales</span>,
            es decir, estructuras de acordes superpuestos. Esto evita la disonancia al tocar hasta siete notas diferentes juntas.
        </p>

        <ul class="list-disc pl-6 text-gray-700 dark:text-gray-300 space-y-3 mb-8">
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">9ª:</span> Similar a la 2ª en la octava inferior.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">11ª:</span> Similar a la 4ª en la octava inferior.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">13ª:</span> Similar a la 6ª en la octava inferior.</li>
        </ul>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Notas Omitidas en Acordes Extendidos</h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
            Dependiendo del acorde, algunas notas pueden omitirse:
        </p>
        <ul class="list-disc pl-6 text-gray-700 dark:text-gray-300 space-y-3 mb-8">
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">7ª:</span> Se puede omitir la quinta. Ejemplo: C – E – (G) – Bb.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">9ª:</span> La quinta suele omitirse. Ejemplo: C – E – (G) – Bb – D.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">11ª:</span> Normalmente se omite la tercera. Ejemplo: C – (E) – G – Bb – D – F.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">13ª:</span> Se suelen omitir la quinta, novena y undécima. Ejemplo: C – E – (G) – Bb – (D) – (F) – A.</li>
        </ul>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Ejemplos de Voicings Poliacordales</h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
            Ejemplos de cómo estructurar acordes extendidos:
        </p>
        <ul class="list-disc pl-6 text-gray-700 dark:text-gray-300 space-y-3 mb-6">
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C11:</span> Mano izquierda: E - G - Bb, Mano derecha: Bb - D - F.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C13:</span> Mano izquierda: E - Bb - D, Mano derecha: A - D - G.</li>
            <li><span class="font-semibold text-indigo-600 dark:text-indigo-400">C13:</span> Mano izquierda: Bb - E - A, Mano derecha: C - E - A.</li>
        </ul>
        <p class="text-gray-600 dark:text-gray-400 text-sm italic">
            Nota: La raíz a menudo se omite, ya que el bajista suele encargarse de esa nota.
        </p>

        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 mt-8">Nombres Alternativos de Acordes</h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
            Además de los nombres habituales, pueden encontrarse variaciones como: <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdom9</span>,
            <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdom11</span>, o <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cdom13</span>.
        </p>

        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 mt-8">Uso de los Acordes Extendidos</h2>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
            Los acordes de novena, undécima y decimotercera se utilizan a menudo como <a href="{{ route('pages.sustitucion-de-acordes') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">sustituciones</a> para triadas regulares, acordes de séptima y otros acordes extendidos.
            Este enfoque es común en el jazz y permite mayor flexibilidad en la armonía manteniendo la misma nota raíz.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-6">Categorías de Acordes</h2>
        <div class="flex flex-wrap justify-center gap-3">
            @foreach ([
                'pages.acordes-mayores' => 'Mayores',
                'pages.acordes-menores' => 'Menores',
                'pages.acordes-septima' => 'Séptima',
                'pages.acordes-extendidos' => 'Extendidos',
                'pages.acordes-suspendidos' => 'Suspendidos',
                'pages.acordes-disminuidos' => 'Disminuidos',
                'pages.acordes-aumentados' => 'Aumentados',
                'pages.acordes-agregados' => 'Agregados',
                'pages.acordes-alterados' => 'Alterados'
            ] as $routeName => $label)
                <a href="{{ route($routeName) }}" class="px-5 py-2.5 bg-indigo-100 dark:bg-slate-700 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
