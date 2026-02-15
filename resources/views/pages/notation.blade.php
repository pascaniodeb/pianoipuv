@extends('layouts.app')

@section('title', 'Acordes en Notación Estándar')

@section('content')
<div id="content" class="p-6 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        @yield('title')
    </h1>

    <p class="text-lg text-gray-700 dark:text-gray-300 text-center mb-6">
        Las imágenes ilustran los acordes en notación estándar junto con los nombres de las notas y las digitaciones (para la mano derecha).
    </p>

    <!-- Sección Acordes Mayores -->
    <h2 class="text-2xl font-bold text-primary dark:text-blue-400 mb-6">Acordes Mayores</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
        @foreach ([
            ['img' => 'notes_c.png', 'desc' => 'La tríada de C mayor incluye las notas C - E - G.'],
            ['img' => 'notes_db.png', 'desc' => 'La tríada de Db mayor incluye las notas Db - F - Ab.'],
            ['img' => 'notes_d.png', 'desc' => 'La tríada de D mayor incluye las notas D - F# - A.'],
            ['img' => 'notes_eb.png', 'desc' => 'La tríada de Eb mayor incluye las notas Eb - G - Bb.'],
            ['img' => 'notes_e.png', 'desc' => 'La tríada de E mayor incluye las notas E - G# - B.'],
            ['img' => 'notes_f.png', 'desc' => 'La tríada de F mayor incluye las notas F - A - C.'],
            ['img' => 'notes_fsharp.png', 'desc' => 'La tríada de F# mayor incluye las notas F# - A# - C#.'],
            ['img' => 'notes_g.png', 'desc' => 'La tríada de G mayor incluye las notas G - B - D.'],
            ['img' => 'notes_ab.png', 'desc' => 'La tríada de Ab mayor incluye las notas Ab - C - Eb.'],
            ['img' => 'notes_a.png', 'desc' => 'La tríada de A mayor incluye las notas A - C# - E.'],
            ['img' => 'notes_bb.png', 'desc' => 'La tríada de Bb mayor incluye las notas Bb - D - F.'],
            ['img' => 'notes_b.png', 'desc' => 'La tríada de B mayor incluye las notas B - D# - F#.']
        ] as $chord)
        <div class="bg-white dark:bg-gray-800 p-2 rounded-lg shadow-md text-center">
            <img src="{{ asset('backend/assets/images/' . $chord['img']) }}" alt="{{ $chord['desc'] }}" class="w-24 h-auto mx-auto mb-2">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{ $chord['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- Sección Acordes Menores -->
    <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mt-12 mb-6">Acordes Menores</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
        @foreach ([
            ['img' => 'notes_cm.png', 'desc' => 'La tríada de C menor incluye las notas C - Eb - G.'],
            ['img' => 'notes_dbm.png', 'desc' => 'La tríada de Db menor incluye las notas Db - Fb - Ab.'],
            ['img' => 'notes_dm.png', 'desc' => 'La tríada de D menor incluye las notas D - F - A.'],
            ['img' => 'notes_ebm.png', 'desc' => 'La tríada de Eb menor incluye las notas Eb - Gb - Bb.'],
            ['img' => 'notes_em.png', 'desc' => 'La tríada de E menor incluye las notas E - G - B.'],
            ['img' => 'notes_fm.png', 'desc' => 'La tríada de F menor incluye las notas F - Ab - C.'],
            ['img' => 'notes_fsharpm.png', 'desc' => 'La tríada de F# menor incluye las notas F# - A - C#.'],
            ['img' => 'notes_gm.png', 'desc' => 'La tríada de G menor incluye las notas G - Bb - D.'],
            ['img' => 'notes_abm.png', 'desc' => 'La tríada de Ab menor incluye las notas Ab - B - Eb.'],
            ['img' => 'notes_am.png', 'desc' => 'La tríada de A menor incluye las notas A - C - E.'],
            ['img' => 'notes_bbm.png', 'desc' => 'La tríada de Bb menor incluye las notas Bb - Db - F.'],
            ['img' => 'notes_bm.png', 'desc' => 'La tríada de B menor incluye las notas B - D - F#.']
        ] as $chord)
        <div class="bg-white dark:bg-gray-800 p-2 rounded-lg shadow-md text-center">
            <img src="{{ asset('backend/assets/images/' . $chord['img']) }}" alt="{{ $chord['desc'] }}" class="w-24 h-auto mx-auto mb-2">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{ $chord['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.tipos-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition dark:text-white">
            Ver también Tipos de Acordes &#8250;
        </a>
    </div>
</div>
@endsection
