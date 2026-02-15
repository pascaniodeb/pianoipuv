@section('title', 'Acorde: ' . strtoupper($nota))

<div id="content" class="p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        {{ $infoAdicional['title'] }}
    </h1>

    <p class="mb-6 text-lg text-gray-700 dark:text-gray-300 text-center max-w-2xl mx-auto">
        <strong class="text-indigo-600 dark:text-indigo-400">{{ $infoAdicional['description'] }}</strong><br />
        Elija entre las categorías siguientes o cambie a otra nota raíz utilizando el menú superior.
    </p>

    @include('partials.aside-menu', ['nota' => $nota])

    <div class="flex justify-center mt-6">
        <a href="{{ route('acorde.filtrado', ['nota' => rawurlencode($nota)]) }}"
           class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-xl font-semibold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
            Mostrar y filtrar todos los acordes →
        </a>
    </div>

    <aside class="mt-12 text-center">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Explicaciones</h2>
        <p class="text-gray-600 dark:text-gray-400 text-lg mx-auto max-w-4xl mb-6">
            A menudo se utilizan abreviaturas en los nombres de los acordes (símbolos de acordes alternativos entre paréntesis).
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 text-left max-w-4xl mx-auto">
            @foreach ($acordes as $acorde => $descripcion)
                <div class="p-3 bg-gray-50 dark:bg-slate-800 rounded-lg hover:shadow-md transition-shadow duration-300">
                    <span class="text-indigo-600 dark:text-indigo-400 font-bold">{{ $acorde }}:</span>
                    <span class="text-gray-600 dark:text-gray-400 text-sm">{{ $descripcion }}</span>
                </div>
            @endforeach
        </div>
    </aside>
</div>
