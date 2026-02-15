@section('title', 'Acorde: ' . strtoupper($nota) . ' ' . strtolower($variacion))

<div id="content" class="container mx-auto p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center dark:text-white">
        @yield('title')
    </h1>

    <h2 class="text-center text-gray-700 dark:text-gray-300 mb-6 text-xl">
        <strong>{{ $variacionData['descripcion'] ?? 'No especificadas' }} para piano con diagrama de teclado.</strong>
    </h2>

    <p class="text-center text-gray-600 dark:text-gray-400 mb-6 text-lg leading-relaxed max-w-4xl mx-auto">
        <span class="font-semibold text-indigo-600 dark:text-indigo-400">Explicación:</span>
        {{ $variacionData['explicacion'] ?? 'El acorde ' . strtoupper($nota) . strtoupper($variacion) . ' no tiene descripción disponible.' }}
        <br class="my-2">

        <span class="font-semibold text-indigo-600 dark:text-indigo-400">Teoría:</span>
        {{ $variacionData['teoria'] ?? 'El acorde de ' . strtoupper($nota) . strtoupper($variacion) . ' no tiene teoría disponible.' }}

        @if(isset($variacionData['omisiones']))
            <br class="my-2">
            <span class="font-semibold text-indigo-600 dark:text-indigo-400">Omisiones:</span>
            @foreach ($variacionData['omisiones'] as $omision => $descripcion)
                <span class="block text-lg">{{ $omision }}: {{ $descripcion }}</span>
            @endforeach
        @endif

        @if(isset($variacionData['digitaciones']['izquierda_letter']) && isset($variacionData['digitaciones']['derecha_letter']))
            <br class="my-2">
            <span class="font-semibold text-indigo-600 dark:text-indigo-400">Digitación:</span>
            <span class="text-gray-700 dark:text-gray-300 font-medium">Mano izquierda:</span> {{ $variacionData['digitaciones']['izquierda_letter'] }};
            <span class="text-gray-700 dark:text-gray-300 font-medium">Mano derecha:</span> {{ $variacionData['digitaciones']['derecha_letter'] }}.
        @endif
    </p>

    <div class="flex flex-col items-center">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-6">{{ strtoupper($nota) }} {{ strtolower($variacion) }}</h2>

        @if(in_array($variacion, ['mmaj7', '6-9', 'add', 'sus']) && isset($variacionData['subvariaciones']))
            @foreach($variacionData['subvariaciones'] as $subvariacion => $subData)
                <div class="flex flex-col items-center my-6 p-6 bg-gray-50 dark:bg-slate-800 rounded-xl shadow-md w-full max-w-md">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">{{ strtoupper($nota) }} {{ strtolower($subvariacion) }}</h3>

                    @if(isset($subData['imagen']))
                        <img src="{{ $subData['imagen'] }}"
                            alt="Acorde {{ strtoupper($nota) }}{{ strtolower($subvariacion) }}"
                            class="w-full max-w-sm h-auto my-4 rounded-lg shadow-md" />
                    @endif

                    <span class="text-gray-600 dark:text-gray-400 mb-4">
                        <span class="font-semibold text-indigo-600 dark:text-indigo-400">Descripción:</span> {{ $subData['descripcion'] ?? 'No especificada' }}
                    </span>

                    @if(isset($subData['digitaciones']))
                        <div class="flex justify-center items-center gap-8 mt-4">
                            @if(isset($subData['digitaciones']['izquierda_number']))
                                <div class="text-center p-3 bg-white dark:bg-slate-700 rounded-lg shadow">
                                    <span class="block text-gray-700 dark:text-gray-300 font-semibold text-sm">Mano Izquierda</span>
                                    <span class="block text-indigo-600 dark:text-indigo-400 text-lg font-bold">{{ $subData['digitaciones']['izquierda_number'] }}</span>
                                    @if(isset($subData['digitaciones']['izquierda_imagen']))
                                        <img src="{{ asset('backend/assets/images/digitaciones/' . $subData['digitaciones']['izquierda_imagen']) }}"
                                            alt="Digitación Mano Izquierda"
                                            class="w-8 h-auto mt-2 mx-auto" />
                                    @endif
                                </div>
                            @endif

                            @if(isset($subData['digitaciones']['derecha_number']))
                                <div class="text-center p-3 bg-white dark:bg-slate-700 rounded-lg shadow">
                                    <span class="block text-gray-700 dark:text-gray-300 font-semibold text-sm">Mano Derecha</span>
                                    <span class="block text-indigo-600 dark:text-indigo-400 text-lg font-bold">{{ $subData['digitaciones']['derecha_number'] }}</span>
                                    @if(isset($subData['digitaciones']['derecha_imagen']))
                                        <img src="{{ asset('backend/assets/images/digitaciones/' . $subData['digitaciones']['derecha_imagen']) }}"
                                            alt="Digitación Mano Derecha"
                                            class="w-8 h-auto mt-2 mx-auto" />
                                    @endif
                                </div>
                            @endif
                        </div>

                        @if(isset($subData['digitaciones']['izquierda_letter']) && isset($subData['digitaciones']['derecha_letter']))
                            <p class="text-center mt-4 text-gray-600 dark:text-gray-400">
                                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Digitación:</span>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Izquierda:</span> {{ $subData['digitaciones']['izquierda_letter'] }};
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Derecha:</span> {{ $subData['digitaciones']['derecha_letter'] }}.
                            </p>
                        @endif
                    @endif
                </div>
            @endforeach
        @else
            @if(isset($variacionData['imagen']))
                <img src="{{ $variacionData['imagen'] }}"
                    alt="{{ strtoupper($nota) }}{{ strtoupper($variacion) }} piano chord"
                    class="w-full max-w-md h-auto my-6 rounded-xl shadow-lg" />
            @endif
            <p class="text-gray-600 dark:text-gray-400 text-center max-w-2xl">
                <span class="font-semibold text-indigo-600 dark:text-indigo-400">Descripción:</span> {{ $variacionData['descripcion'] ?? 'No especificada' }}
            </p>
        @endif
    </div>

    @if(isset($variacionData['digitaciones']['izquierda_number']) || isset($variacionData['digitaciones']['derecha_number']))
        <div class="flex justify-center items-center mt-8 gap-8">
            @if(isset($variacionData['digitaciones']['izquierda_number']))
                <div class="text-center p-4 bg-indigo-50 dark:bg-slate-800 rounded-xl shadow-md">
                    <span class="block text-gray-700 dark:text-gray-300 font-semibold">Mano Izquierda</span>
                    <span class="block text-2xl font-bold text-indigo-600 dark:text-indigo-400 my-2">{{ $variacionData['digitaciones']['izquierda_number'] }}</span>
                    @if(isset($variacionData['digitaciones']['izquierda_imagen']))
                        <img src="{{ asset('backend/assets/images/digitaciones/' . $variacionData['digitaciones']['izquierda_imagen']) }}"
                            alt="Digitación Mano Izquierda"
                            class="w-10 h-auto mt-2 mx-auto" />
                    @endif
                </div>
            @endif

            @if(isset($variacionData['digitaciones']['derecha_number']))
                <div class="text-center p-4 bg-indigo-50 dark:bg-slate-800 rounded-xl shadow-md">
                    <span class="block text-gray-700 dark:text-gray-300 font-semibold">Mano Derecha</span>
                    <span class="block text-2xl font-bold text-indigo-600 dark:text-indigo-400 my-2">{{ $variacionData['digitaciones']['derecha_number'] }}</span>
                    @if(isset($variacionData['digitaciones']['derecha_imagen']))
                        <img src="{{ asset('backend/assets/images/digitaciones/' . $variacionData['digitaciones']['derecha_imagen']) }}"
                            alt="Digitación Mano Derecha"
                            class="w-10 h-auto mt-2 mx-auto" />
                    @endif
                </div>
            @endif
        </div>
    @endif

    <div class="text-center mt-8 mb-6 flex flex-wrap justify-center items-center gap-4">
        @if(isset($notaAnterior))
            <a href="{{ route('acorde.variacion', ['nota' => rawurlencode(strtolower($notaAnterior)), 'variacion' => strtolower($variacion)]) }}"
               class="px-4 py-2 bg-indigo-100 dark:bg-slate-700 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-600 hover:text-white transition-colors">
                ← {{ strtoupper($notaAnterior) }} {{ strtolower($variacion) }}
            </a>
        @endif

        <span class="text-gray-500 dark:text-gray-400 px-2">•</span>

        @if(isset($notaSiguiente))
            <a href="{{ route('acorde.variacion', ['nota' => rawurlencode(strtolower($notaSiguiente)), 'variacion' => strtolower($variacion)]) }}"
               class="px-4 py-2 bg-indigo-100 dark:bg-slate-700 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-600 hover:text-white transition-colors">
                {{ strtoupper($notaSiguiente) }} {{ strtolower($variacion) }} →
            </a>
        @endif
    </div>

    @if(isset($variacionData['inversiones']) && count($variacionData['inversiones']) > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-8">
                Inversiones de {{ strtoupper($nota) }} {{ strtolower($variacion) }}
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($variacionData['inversiones'] as $inversion)
                    <div class="p-5 bg-gray-50 dark:bg-slate-800 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-slate-700">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3 text-center">
                            {{ $inversion['nombre'] }}
                        </h3>
                        <div class="flex justify-center">
                            <img
                                src="{{ asset(str_replace(['{nota}'], [$nota], $inversion['imagen'])) }}"
                                alt="Inversión {{ $inversion['nombre'] }} de {{ strtoupper($nota) }} {{ strtoupper($variacion) }}"
                                class="w-full max-w-xs h-auto rounded-lg shadow-md">
                        </div>
                        <p class="text-center mt-4 text-gray-600 dark:text-gray-400">
                            <span class="font-semibold text-indigo-600 dark:text-indigo-400">Notas:</span>
                            {{ implode(' - ', str_replace(['{nota}'], [strtoupper($nota)], $inversion['notas'])) }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if(in_array($variacion, ['maj', 'min', '7', 'm7']))
        <div class="mt-8 text-center">
            <a href="{{ route('acorde.alternativa-bajo', ['nota' => rawurlencode(strtolower($nota)), 'variacion' => strtolower($variacion)]) }}"
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-xl font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
                Ver también acordes de {{ strtoupper($nota) }} {{ strtolower($variacion) }} con notas de bajo alternativas →
            </a>
        </div>
    @endif

    @include('partials.aside-menu')
</div>
