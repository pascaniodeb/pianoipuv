<aside class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-6 rounded-2xl shadow-lg mt-8">
    <h2 class="text-xl font-bold text-center mb-4">Variaciones para {{ strtoupper($nota) }}</h2>
    <div class="flex flex-wrap justify-center gap-2">
        @foreach ($variacionesValidas as $variacion)
            <a href="{{ route('acorde.variacion', ['nota' => rawurlencode($nota), 'variacion' => rawurlencode(str_replace('/', '-', $variacion))]) }}"
               class="text-sm font-semibold text-center text-white px-4 py-2 rounded-lg bg-white/20 hover:bg-white hover:text-indigo-600 transition-all duration-300 backdrop-blur-sm">
                {{ strtoupper($nota) }}{{ str_replace('/', '-', $variacion) }}
            </a>
        @endforeach
    </div>
</aside>
