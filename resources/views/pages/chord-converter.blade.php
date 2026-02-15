@extends('layouts.app')

@section('title', 'Convertir notas en acordes')

@section('content')
<div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md">
    <!-- Título principal -->
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center mb-8">@yield('title')</h1>

    <!-- Instrucciones y entrada de texto -->
    <div class="mb-8">
        <p class="text-lg text-gray-700 dark:text-gray-300 text-center mb-4">Introduce las letras de las notas:</p>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
            <input
                type="text"
                id="myInput"
                placeholder="Ejemplo: C E G"
                class="w-full md:w-1/2 p-3 border rounded-lg focus:outline-none focus:ring focus:ring-primary dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"
            />
            <button
                id="myBtn"
                onclick="myFunction()"
                class="px-6 py-3 bg-primary text-white font-semibold rounded-full hover:bg-secondary transition"
            >
                Comprobar el acorde
            </button>
        </div>
        <p id="converttext" class="text-lg text-primary dark:text-blue-400 text-center mt-4"></p>
    </div>

    <!-- Explicaciones e instrucciones detalladas -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">Instrucciones</h2>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-lg space-y-2">
            <li>Las letras de las notas se escriben automáticamente en mayúsculas en el campo de texto.</li>
            <li>No uses comas ni guiones entre las notas. Ejemplo: <strong>C E G</strong> es correcto.</li>
            <li>Para notas bemoles utiliza "b". Ejemplo: <strong>C Eb G</strong>.</li>
            <li>Para sostenidos usa "#". Ejemplo: <strong>D F# A</strong>.</li>
            <li>El orden de las notas importa. Ejemplo: <strong>C E G A</strong> es C6, pero <strong>A C E G</strong> es Am7.</li>
            <li>Consulta la sección de símbolos de acordes para más información.</li>
        </ul>
        <p class="text-center mt-4">
            <a href="{{ route('pages.simbolos-de-acordes') }}" class="text-primary dark:text-blue-400 underline hover:text-indigo-600 dark:hover:text-blue-300">
                Ver símbolos de acordes &#8250;
            </a>
        </p>
    </div>

    <!-- Explicación de abreviaturas -->
    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-secondary dark:text-gray-200 mb-4 text-center">Explicación de abreviaturas y signos</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-gray-700 dark:text-gray-300">
            <div><span class="font-bold">C, D, E, F, G, A, B:</span> Notas raíz</div>
            <div><span class="font-bold">#:</span> Sostenido</div>
            <div><span class="font-bold">b:</span> Bemol</div>
            <div><span class="font-bold">m:</span> Menor</div>
            <div><span class="font-bold">7:</span> Séptima dominante</div>
            <div><span class="font-bold">maj7:</span> Mayor séptima</div>
            <div><span class="font-bold">sus:</span> Suspendida</div>
            <div><span class="font-bold">dim:</span> Disminuida</div>
            <div><span class="font-bold">aug:</span> Aumentada</div>
        </div>
    </div>
</div>

<!-- Script para la funcionalidad -->
<script>
    const input = document.getElementById("myInput");
    input.addEventListener("keyup", function (e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            document.getElementById("myBtn").click();
        }
    });

    function myFunction() {
        const inputVal = document.getElementById("myInput").value.trim().toLowerCase();
        const chordMappings = {
        // Acordes Mayores
        "c e g": "C",
        "c# f g#": "C#",
        "db f ab": "Db",
        "d f# a": "D",
        "d# g a#": "D#",
        "eb g bb": "Eb",
        "e g# b": "E",
        "f a c": "F",
        "f# a# c#": "F#",
        "gb bb db": "Gb",
        "g b d": "G",
        "g# c d#": "G#",
        "ab c eb": "Ab",
        "a c# e": "A",
        "a# d f": "A#",
        "bb d f": "Bb",
        "b d# f#": "B",

        // Acordes Menores
        "c eb g": "Cm",
        "c# e g#": "C#m",
        "db fb ab": "Dbm",
        "d f a": "Dm",
        "d# f# a#": "D#m",
        "eb gb bb": "Ebm",
        "e g b": "Em",
        "f ab c": "Fm",
        "f# a c#": "F#m",
        "gb a db": "Gbm",
        "g bb d": "Gm",
        "g# b d#": "G#m",
        "ab b eb": "Abm",
        "a c e": "Am",
        "a# c# f": "A#m",
        "bb db f": "Bbm",
        "b d f#": "Bm",

        // Acordes Séptima (Dominante)
        "c e g bb": "C7",
        "c# f g# b": "C#7",
        "db f ab cb": "Db7",
        "d f# a c": "D7",
        "d# g a# c#": "D#7",
        "eb g bb db": "Eb7",
        "e g# b d": "E7",
        "f a c eb": "F7",
        "f# a# c# e": "F#7",
        "gb bb db fb": "Gb7",
        "g b d f": "G7",
        "g# c d# f#": "G#7",
        "ab c eb gb": "Ab7",
        "a c# e g": "A7",
        "a# d f g#": "A#7",
        "bb d f ab": "Bb7",
        "b d# f# a": "B7",

        // Acordes Séptima Menor
        "c eb g bb": "Cm7",
        "c# e g# b": "C#m7",
        "db fb ab cb": "Dbm7",
        "d f a c": "Dm7",
        "d# f# a# c#": "D#m7",
        "eb gb bb db": "Ebm7",
        "e g b d": "Em7",
        "f ab c eb": "Fm7",
        "f# a c# e": "F#m7",
        "gb a db fb": "Gbm7",
        "g bb d f": "Gm7",
        "g# b d# f#": "G#m7",
        "ab b eb gb": "Abm7",
        "a c e g": "Am7",
        "a# c# f g#": "A#m7",
        "bb db f ab": "Bbm7",
        "b d f# a": "Bm7",

        // Acordes Séptima Mayor
        "c e g b": "Cmaj7",
        "c# f g# c": "C#maj7",
        "db f ab c": "Dbmaj7",
        "d f# a c#": "Dmaj7",
        "d# g a# d": "D#maj7",
        "eb g bb d": "Ebmaj7",
        "e g# b d#": "Emaj7",
        "f a c e": "Fmaj7",
        "f# a# c# f": "F#maj7",
        "gb bb db f": "Gbmaj7",
        "g b d f#": "Gmaj7",
        "g# c d# g": "G#maj7",
        "ab c eb g": "Abmaj7",
        "a c# e g#": "Amaj7",
        "a# d f a": "A#maj7",
        "bb d f a": "Bbmaj7",
        "b d# f# a#": "Bmaj7",

        // Acordes Diminuídos
        "c eb gb": "Cdim",
        "c# e g": "C#dim",
        "db fb abb": "Dbdim",
        "d f ab": "Ddim",
        "d# f# a": "D#dim",
        "eb gb a": "Ebdim",
        "e g bb": "Edim",
        "f ab cb": "Fdim",
        "f# a c": "F#dim",
        "gb a dbb": "Gbdim",
        "g bb db": "Gdim",
        "g# b d": "G#dim",
        "ab b eb": "Abdim",
        "a c eb": "Adim",
        "a# c# e": "A#dim",
        "bb db fb": "Bbdim",
        "b d f": "Bdim",

        // Acordes Aumentados
        "c e g#": "Caug",
        "c# f a": "C#aug",
        "db f ab#": "Dbaug",
        "d f# a#": "Daug",
        "d# g b": "D#aug",
        "eb g bb#": "Ebaug",
        "e g# b#": "Eaug",
        "f a c#": "Faug",
        "f# a# c##": "F#aug",
        "gb bb db#": "Gbaug",
        "g b d#": "Gaug",
        "g# c e": "G#aug",
        "ab c eb#": "Abaug",
        "a c# e#": "Aaug",
        "a# d f#": "A#aug",
        "bb d f#": "Bbaug",
        "b d# f##": "Baug",
    };


        const result = chordMappings[inputVal] || "No se encontró ningún acorde. Por favor, revisa tu entrada.";
        document.getElementById("converttext").innerHTML = `<strong>${result}</strong>`;
    }
</script>
@endsection
