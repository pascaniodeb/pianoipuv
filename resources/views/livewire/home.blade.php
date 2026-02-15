@section('title', 'Aprende a tocar el piano...')

<div>
    <!-- Hero Section -->
    <div class="relative w-full bg-gradient-to-br from-indigo-600 via-purple-600 to-violet-600 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 py-16">
            <!-- Título -->
            <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center drop-shadow-lg">
                @yield('title')
            </h1>

            <!-- Introducción -->
            <p class="text-xl text-white/90 leading-relaxed mb-10 text-center max-w-4xl mx-auto font-medium">
                Descubre cómo tocar acordes en el piano de forma sencilla y práctica. Explora nuestras categorías y selecciona una nota específica para ver acordes ilustrados con imágenes detalladas y explicaciones claras que te ayudarán a comprender la teoría musical de manera rápida y efectiva. <strong class="text-amber-300">¡Empieza tu viaje musical ahora!</strong>
            </p>

            <!-- Post Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-12">
                @foreach (['C', 'D', 'E', 'F', 'G', 'A', 'B'] as $nota)
                    <a href="{{ route('acorde.principal', ['nota' => strtolower($nota)]) }}"
                       class="group flex flex-col items-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl hover:bg-white/20 transition-all duration-300 border border-white/20">
                        <span class="text-2xl font-bold text-white mb-3 group-hover:scale-110 group-hover:text-amber-300 transition-all duration-300">{{ $nota }}</span>
                        <img src="{{ asset('backend/assets/images/'. strtolower($nota) .'.png') }}"
                             alt="{{ $nota }} chord diagram"
                             class="w-full h-auto rounded-lg group-hover:ring-2 ring-amber-300 transition-all duration-300">
                        <span class="mt-3 text-sm font-medium text-white/80 group-hover:text-white transition-colors">
                            Ver {{ $nota }} →
                        </span>
                    </a>
                @endforeach
            </div>

            <!-- Categorías de acordes -->
            <div class="text-center">
                <h2 class="text-2xl font-bold text-white mb-6 drop-shadow-md">Categorías de Acordes</h2>
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
                        <a href="{{ route($routeName) }}"
                           class="px-5 py-2.5 bg-white/20 backdrop-blur-sm text-white rounded-xl font-medium hover:bg-white hover:text-purple-600 hover:shadow-lg transition-all duration-300 border border-white/30">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Texto adicional -->
    <div class="py-16 bg-gradient-to-b from-white to-gray-50 dark:from-slate-900 dark:to-slate-800">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed">
                Explora todas las categorías de acordes de piano en esta guía completa. Te recomendamos comenzar con las <em class="text-indigo-600 dark:text-indigo-400">tríadas</em> mayores y menores, los acordes básicos de tres notas que forman la base de la música. <strong class="text-indigo-600 dark:text-indigo-400">¡Domina estos fundamentos y avanza con confianza!</strong>
            </p>
            <p class="mt-6">
                <a href="{{ route('pages.buscador-de-acordes') }}" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors text-lg">
                    Buscador de acordes invertidos →
                </a>
            </p>
        </div>
    </div>

    <!-- Contenido adicional -->
    <aside class="w-full bg-gray-50 dark:bg-slate-800/50 py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white text-center mb-8">¿Qué es un acorde?</h2>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Un acorde es un grupo de notas que se pueden tocar juntas y funcionan como la armonía en la música. Hay muchos acordes diferentes que pueden organizarse en diferentes grupos y categorías. Una cosa que difiere entre acordes es cuántas notas se incluyen. Existen
                <em class="text-indigo-600 dark:text-indigo-400">tríadas</em> (tres notas), <em class="text-indigo-600 dark:text-indigo-400">de cuatro notas</em> (a veces llamados <em class="text-indigo-600 dark:text-indigo-400">tetracordios</em>) y <em class="text-indigo-600 dark:text-indigo-400">acordes de cinco notas</em>. Además, también existen acordes de seis o siete notas. Consulte
                <a href="{{ route('pages.tipos-de-acordes') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">Resumen detallado de los tipos de acordes</a>.
            </p>

            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Construyendo acordes</h3>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Una buena manera de aprender acordes en el piano es familiarizarse con cómo se construyen. El acorde
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cmaj7</span> añade una nota a
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C</span>, la séptima en la escala de C Mayor. El acorde
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cm7</span> añade una nota a
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cm</span>, la séptima en la escala de C menor. Mirando el acorde extendido (ej.
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C7</span>,
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C9</span>,
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C11</span>), ellos están añadiendo notas utilizando intervalos desde la raíz de los acordes con séptimo, noveno y undécimo grados. Consulte
                <a href="{{ route('pages.construccion-de-acordes') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">la lista de acordes construidos por pasos</a>.
            </p>

            <h2 class="text-3xl font-bold text-gray-800 dark:text-white text-center mb-8">... ¿Y cómo tocar acordes de piano?</h2>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Cuando aprenda qué notas pertenecen a un acorde, podrá tocarlo de varias maneras. Se puede tocar un acorde pulsando todas las teclas simultáneamente o cada una a la vez. A medida que progrese, encontrará más formas de modificar el resultado. También es importante utilizar los dedos correctos, lo que se denomina <em class="text-indigo-600 dark:text-indigo-400">digitaciones</em>.
            </p>

            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Manos</h3>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                ¿Con qué mano se tocan los acordes en el piano? La respuesta es que depende. Para el acompañamiento musical (es decir, si tocas en una banda o con un cantante), puedes elegir tocar sólo con una mano o con las dos, dependiendo de lo avanzado que estés tocando. Consulte
                <a href="{{ route('pages.acordes-a-dos-manos') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">Acordes a dos manos</a>.
            </p>

            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Digitaciones</h3>
            <ul class="list-disc pl-6 text-lg leading-relaxed mb-8 space-y-3 text-gray-700 dark:text-gray-300">
                <li>En general, evita utilizar el pulgar para las teclas negras.</li>
                <li>Pero la mayor parte del tiempo (es decir, cuando la primera nota no es una tecla negra), debes utilizar el pulgar.</li>
                <li>Busque siempre la posición más natural para la mano.</li>
                <li>Las digitaciones más habituales para las tríadas con la mano izquierda son: meñique (5), medio (3) y pulgar (1).</li>
                <li>Las digitaciones más habituales para las tríadas con la mano derecha son: pulgar (1), dedo corazón (3) y meñique (5).</li>
            </ul>

            <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">
                Los números representan los cinco dedos, del pulgar (1) al meñique (5), para ambas manos.
                Aquí encontrarás digitaciones sugeridas que siguen la forma estándar, aunque podrían variar según las necesidades.
                <br>
                Para fortalecer los dedos, especialmente el anular, realiza ejercicios de independencia. Consulta
                <a href="{{ route('pages.movimientos-de-dedos') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">digitaciones ilustradas</a>.
            </p>

            <h3 class="text-xl font-semibold mt-8 mb-4 text-gray-800 dark:text-white">Combinación</h3>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Después de aprender algunos acordes, el siguiente paso es
                <a href="{{ route('pages.progresiones') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">combinarlos en progresiones</a>.
            </p>

            <h2 class="text-3xl font-bold text-gray-800 dark:text-white text-center mb-8">¿Cómo leer los diagramas?</h2>
            <p class="text-lg leading-relaxed mb-6 text-gray-700 dark:text-gray-300">
                En la imagen de abajo se puede ver un ejemplo de cómo un acorde de piano se
                presenta en este sitio, incluyendo un diagrama:
            </p>
            <div class="flex justify-center mb-8">
                <img src="{{ asset('backend/assets/images/chord_info.png') }}" loading="lazy" alt="Diagrama de acorde de piano"
                    class="rounded-xl shadow-lg" width="580" height="222" />
            </div>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Un color rojo significa que la tecla forma parte del acorde enfocado.
                Para tocar el acorde real en un piano, pulse todas las teclas marcadas en rojo
                (si es necesario, consulte
                <a href="{{ route('pages.diagrama-de-acordes') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">un diagrama comparado con una imagen realista</a>).
                Dado que el patrón de teclas se repite en el teclado, puede colocar
                la mano en muchas posiciones. Sin embargo, notará que hay más graves en la parte izquierda del teclado
                y más agudos a medida que vas hacia la derecha. Por lo tanto, debe esforzarse por colocar la mano en algún punto intermedio.
            </p>

            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Gráficos</h3>
            <p class="text-lg leading-relaxed mb-8 text-gray-700 dark:text-gray-300">
                Para entender las imágenes utilizadas en la guía de acordes de piano es conveniente
                y ventajoso conocer
                <a href="{{ route('pages.notas-del-teclado') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">todas las notas del teclado</a>.
                Consulte también
                <a href="{{ route('pages.notacion') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">tríadas en notaciones estándar</a>.
            </p>

            <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Notación</h3>
            <p class="text-lg leading-relaxed mb-4 text-gray-700 dark:text-gray-300">
                Cuando miramos los símbolos de los acordes de piano, a menudo vemos
                <em>#</em> (se pronuncia <em>sostenido</em>) o <em>b</em> (se pronuncia
                <em>bemol</em>), por ejemplo <span class="font-semibold text-indigo-600 dark:text-indigo-400">C#</span> o
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Db</span>.
                A continuación, el acorde se escribe con una sola letra, como en
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C</span>, que es un acorde mayor. Un acorde escrito como
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cm</span> significa C menor.
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Sus</span>, <span class="font-semibold text-indigo-600 dark:text-indigo-400">Dim</span> y
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Aug</span> son abreviaciones para suspendido,
                disminuido y aumentado. Para
                <a href="{{ route('pages.inversiones') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">acordes invertidos</a>
                se utiliza una barra inclinada o slash entre el nombre del acorde original y la nota de bajo alternativa (por ejemplo,
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C/E</span>).
                A veces puede aparecer un paréntesis en el nombre del acorde, como
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">C(#5)</span>, lo que significa que el acorde tiene una alteración o extensión. Menos común es el uso de <em>no</em> en un acorde, como
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Cno3</span>, que significa que la triada se toca sin la tercera.
            </p>
        </div>
    </aside>
</div>
