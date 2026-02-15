@extends('layouts.app')

@section('title', 'Ruptura de Acordes')

@section('content')
<div id="content" class="container mx-auto px-4 py-8">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        @yield('title')
    </h1>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        <span class="font-medium">Ejemplos de acordes rotos para piano.</span><br /><br />
        En su forma más simple, así es como una serie de acordes rotos podría verse en un sistema de notas:
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_1.png') }}"
            alt="Piano notation"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        En el primer compás se toca <strong>C - E - G - E</strong>, en el segundo compás <strong>F - A - C - A</strong>,
        en el tercer compás <strong>C - E - G - E</strong>, en el cuarto compás <strong>G - B - D - B</strong>,
        y en el último compás <strong>C - G - E - C</strong>.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mt-8 mb-4">Un poco más complejo</h2>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        Observa cómo se utiliza <strong>F</strong> como nota de bajo estático en el segundo compás. También, cómo las líneas de notas se vuelven hacia atrás en el tercer compás con las digitaciones 1-5-3 para preparar el pulgar para tocar el primer tono en el siguiente acorde (<strong>C</strong>). El acorde <strong>C7</strong> en el cuarto compás incluye solo tres notas ya que se omite la tercera, una práctica común que hace que el acorde se ajuste al patrón general.
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_2.png') }}"
            alt="Piano notation"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        A esto se podrían añadir algunas notas en clave de G para potenciar la armonía:
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_3.png') }}"
            alt="Piano notation"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        Cuando toques acordes rotos, puedes experimentar con tu pedal de sustain (si tienes uno) para lograr un sonido que te guste.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mt-8 mb-4">Bajo Alberti</h2>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        Una figura de acompañamiento especial es el llamado <strong>Bajo Alberti</strong>, nombrado así por el compositor italiano del siglo XVIII Domenico Alberti. Este estilo de acompañamiento es común en la música clásica y consiste en tocar una secuencia de notas (bajo, alto, medio, alto) en corcheas.
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_alberti_bass.png') }}"
            alt="Piano notation Alberti bass"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mt-8 mb-4">Valses</h2>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        En los valses, el compás <strong>3/4</strong> es muy común y un patrón típico para la mano izquierda es tocar el acorde en tres partes: una nota seguida de dos notas repetidas. A continuación, se muestra un ejemplo:
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_4.png') }}"
            alt="Piano notation"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        Una vez más, podríamos añadir algunas notas a la clave de sol:
    </p>

    <div class="flex justify-center my-6">
        <img src="{{ asset('backend/assets/images/broken_chords_5.png') }}"
            alt="Piano notation"
            class="max-w-full h-auto rounded shadow-md">
    </div>

    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
        La forma en que se toca la clave de sol no es la típica de los valses, pero se utiliza aquí como una demostración sencilla.
    </p>

    <!-- Enlace relacionado -->
    <div class="text-center mt-12">
        <a href="{{ route('pages.ejercicios-de-acordes') }}" class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition">
            Ver también Ejercicios de acordes &#8250;
        </a>
    </div>
</div>
@endsection
