<div class="container mx-auto p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-6 text-3xl sm:text-4xl font-extrabold leading-none tracking-tight text-gray-800 dark:text-white md:text-5xl lg:text-6xl text-center">
        Acordes de {{ strtoupper($nota) }} {{ strtolower($variacion) }} con bajo alternativo
    </h1>

    @if(isset($explicacionTeoria))
        <h2 class="text-center text-gray-700 dark:text-gray-300 mb-8 text-lg sm:text-xl max-w-3xl mx-auto">
            <strong class="text-indigo-600 dark:text-indigo-400">Acorde de {{ strtoupper($nota) }} {{ strtolower($variacion) }} para piano con notas de bajo alternativas presentadas con diagramas de teclado.</strong>
        </h2>
    @endif

    @if(isset($explicacionTeoria['explicacion']))
        <div class="text-center mb-8 max-w-4xl mx-auto">
            <h2 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">Explicación</h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
                {{ $explicacionTeoria['explicacion'] }}
            </p>
        </div>
    @endif

    @if(isset($explicacionTeoria['teoria']) && count($explicacionTeoria['teoria']) > 0)
        <div class="text-center mb-8">
            <h2 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-6">Teoría</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
                @foreach($explicacionTeoria['teoria'] as $acorde => $desc)
                    <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ $acorde }}:</span>
                        <span class="text-gray-600 dark:text-gray-400 text-sm block mt-1">{{ $desc }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if(isset($alternativas['alternativas']) && count($alternativas['alternativas']) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @foreach($alternativas['alternativas'] as $alternativa)
                <div class="p-6 bg-gray-50 dark:bg-slate-800 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-slate-700">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center mb-4">{{ $alternativa['nombre'] }}</h3>

                    <div class="flex justify-center mb-4">
                        <img src="{{ asset($alternativa['imagen']) }}"
                            alt="Acorde {{ $alternativa['nombre'] }}"
                            class="w-full max-w-xs h-auto rounded-xl shadow-md">
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        <span class="font-semibold text-indigo-600 dark:text-indigo-400">Descripción:</span> {{ $alternativa['descripcion'] }}
                    </p>

                    @if(isset($alternativa['digitaciones']))
                        <div class="flex justify-center gap-6 mt-4">
                            <div class="text-center p-3 bg-white dark:bg-slate-700 rounded-lg shadow">
                                <span class="block text-gray-700 dark:text-gray-300 font-semibold text-sm">Mano Izquierda</span>
                                <img src="{{ asset('backend/assets/images/digitaciones/' . $alternativa['digitaciones']['izquierda_imagen']) }}"
                                    alt="Digitación Mano Izquierda"
                                    class="w-10 h-auto mt-2 mx-auto" />
                                <p class="text-indigo-600 dark:text-indigo-400 font-bold mt-1">{{ $alternativa['digitaciones']['izquierda_number'] }}</p>
                            </div>

                            <div class="text-center p-3 bg-white dark:bg-slate-700 rounded-lg shadow">
                                <span class="block text-gray-700 dark:text-gray-300 font-semibold text-sm">Mano Derecha</span>
                                <img src="{{ asset('backend/assets/images/digitaciones/' . $alternativa['digitaciones']['derecha_imagen']) }}"
                                    alt="Digitación Mano Derecha"
                                    class="w-10 h-auto mt-2 mx-auto" />
                                <p class="text-indigo-600 dark:text-indigo-400 font-bold mt-1">{{ $alternativa['digitaciones']['derecha_number'] }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500 dark:text-gray-400 text-center mt-8 text-lg">No hay alternativas disponibles para esta variación.</p>
    @endif

    <div class="text-center mt-10">
        <a href="{{ route('acorde.variacion', ['nota' => rawurlencode(strtolower($nota)), 'variacion' => strtolower($variacion)]) }}"
           class="inline-flex items-center px-6 py-3 bg-indigo-100 dark:bg-slate-700 text-indigo-700 dark:text-indigo-300 rounded-xl font-semibold hover:bg-indigo-600 dark:hover:bg-indigo-600 hover:text-white transition-all duration-300">
            ← Volver al acorde {{ strtoupper($nota) }} {{ strtolower($variacion) }}
        </a>
    </div>
</div>
