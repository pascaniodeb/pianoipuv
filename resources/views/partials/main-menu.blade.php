<nav class="relative overflow-hidden bg-gradient-to-r from-indigo-600 via-purple-600 to-violet-600">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-20"></div>
    <div class="relative container mx-auto px-4 py-3">
        <div class="flex flex-wrap justify-center gap-2">
            @foreach (['C', 'C#', 'Db', 'D', 'D#', 'Eb', 'E', 'F', 'F#', 'Gb', 'G', 'G#', 'Ab', 'A', 'A#', 'Bb', 'B'] as $index => $nota)
                <a href="{{ route('acorde.principal', ['nota' => rawurlencode(strtolower($nota))]) }}"
                   class="group relative flex items-center justify-center w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm text-white font-bold text-sm transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-indigo-500/40 border border-white/20">
                    {{ $nota }}
                    <span class="absolute inset-0 rounded-xl bg-gradient-to-r from-amber-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></span>
                </a>
            @endforeach
        </div>
    </div>
</nav>
