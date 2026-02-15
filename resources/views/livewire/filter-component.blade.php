<div class="container mx-auto p-6 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
    <h1 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-white">Variaciones para la nota {{ strtoupper($nota) }}</h1>

    <div class="flex flex-wrap justify-center gap-3 mb-10">
        <button wire:click="filterSelection('mayor')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'mayor' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Mayor
        </button>
        <button wire:click="filterSelection('menor')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'menor' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Menor
        </button>
        <button wire:click="filterSelection('dominante')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'dominante' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Dominante
        </button>
        <button wire:click="filterSelection('disminuido')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'disminuido' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Disminuido
        </button>
        <button wire:click="filterSelection('aumentado')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'aumentado' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Aumentado
        </button>
        <button wire:click="filterSelection('alterado')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'alterado' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Alterado
        </button>
        <button wire:click="filterSelection('misc')"
                class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ $selectedFilter === 'misc' ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-100 dark:hover:bg-slate-600' }}">
            Misc
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse ($variaciones as $variacion => $datos)
            <div class="group border border-gray-100 dark:border-slate-700 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 bg-white dark:bg-slate-800 overflow-hidden">
                @if (isset($datos['imagen']))
                    <div class="p-4 bg-gray-50 dark:bg-slate-700/50">
                        <img src="{{ $datos['imagen'] }}" alt="Imagen de {{ $datos['nombre'] }}" class="w-full h-auto rounded-xl shadow-sm group-hover:shadow-md transition-shadow duration-300">
                    </div>
                @else
                    <div class="p-4 bg-gray-50 dark:bg-slate-700/50 flex items-center justify-center h-48">
                        <p class="text-gray-400 italic">Sin imagen disponible</p>
                    </div>
                @endif
                <div class="p-4">
                    <h3 class="text-lg font-bold text-center text-gray-800 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">{{ $datos['nombre'] ?? 'Nombre no disponible' }}</h3>
                    <p class="text-sm text-center text-gray-500 dark:text-gray-400">{{ $datos['descripcion'] ?? 'Descripción no disponible' }}</p>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 dark:text-gray-400 text-lg">No se encontraron variaciones para esta categoría.</p>
            </div>
        @endforelse
    </div>
</div>
