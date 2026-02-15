<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
// });

// Componente Livewire Home
Route::get('/', function () {
    return view('layouts.app', ['livewireComponent' => 'home']);
})->name('home');

// Ruta para las notas principales
Route::get('/acorde/{nota}', function ($nota) {
    return view('layouts.app', [
        'livewireComponent' => 'chord-component',
        'livewireParams' => compact('nota'),
    ]);
})->name('acorde.principal');

// Ruta para las notas filtradas
Route::get('/acorde/{nota}/filtrado', function ($nota) {
    return view('layouts.app', [
        'livewireComponent' => 'filter-component',
        'livewireParams' => compact('nota'),
    ]);
})->name('acorde.filtrado');

// Ruta para las variaciones de notas
Route::get('/acorde/{nota}/{variacion}', function ($nota, $variacion) {
    return view('layouts.app', [
        'livewireComponent' => 'chord-variation-component',
        'livewireParams' => compact('nota', 'variacion'),
    ]);
})->name('acorde.variacion');

// Ruta para las alternativas con bajo
Route::get('/acorde/{nota}/{variacion}/alternativa-bajo', function ($nota, $variacion) {
    return view('layouts.app', [
        'livewireComponent' => 'bass-alternative-component',
        'livewireParams' => compact('nota', 'variacion'),
    ]);
})->name('acorde.alternativa-bajo');

// Grupo de rutas para las vistas informativas en la carpeta 'pages'
Route::prefix('info')->group(function () {
    Route::view('/tipos-de-acordes', 'pages.chord-types')->name('pages.tipos-de-acordes');
    Route::view('/construccion-de-acordes', 'pages.chord-steps')->name('pages.construccion-de-acordes');
    Route::view('/acordes-a-dos-manos', 'pages.two-hands')->name('pages.acordes-a-dos-manos');
    Route::view('/progresiones', 'pages.combine-majortable')->name('pages.progresiones');
    Route::view('/movimientos-de-dedos', 'pages.fingerings-movements')->name('pages.movimientos-de-dedos');
    Route::view('/notas-del-teclado', 'pages.keyboard-notes')->name('pages.notas-del-teclado');
    Route::view('/notacion', 'pages.notation')->name('pages.notacion');
    Route::view('/inversiones', 'pages.inversions')->name('pages.inversiones');
    Route::view('/ejercicios-de-acordes', 'pages.chord-exercises')->name('pages.ejercicios-de-acordes');
    Route::view('/libros-electronicos', 'pages.ebooks')->name('pages.libros-electronicos');
    Route::view('/enlaces', 'pages.links')->name('pages.enlaces');
    Route::view('/mapa-del-sitio', 'pages.sitemap')->name('pages.mapa-del-sitio');
    Route::view('/acerca', 'pages.about')->name('pages.acerca');

    // Ruta para "Grupo de Acordes"
    Route::view('/acordes-mayores', 'pages.major')->name('pages.acordes-mayores');
    Route::view('/acordes-menores', 'pages.minor')->name('pages.acordes-menores');
    Route::view('/acordes-septima', 'pages.seventh')->name('pages.acordes-septima');
    Route::view('/acordes-extendidos', 'pages.extended')->name('pages.acordes-extendidos');
    Route::view('/acordes-suspendidos', 'pages.sus')->name('pages.acordes-suspendidos');
    Route::view('/acordes-disminuidos', 'pages.dim')->name('pages.acordes-disminuidos');
    Route::view('/acordes-aumentados', 'pages.aug')->name('pages.acordes-aumentados');
    Route::view('/acordes-agregados', 'pages.add')->name('pages.acordes-agregados');
    Route::view('/acordes-alterados', 'pages.altered')->name('pages.acordes-alterados');

    // Miscelaneos
    Route::view('/resumen-acordes-mayores', 'pages.overviews-major')->name('pages.resumen-acordes-mayores');
    Route::view('/resumen-acordes-menores', 'pages.overviews-minor')->name('pages.resumen-acordes-menores');
    Route::view('/mas-acordes', 'pages.misc')->name('pages.mas-acordes');
    Route::view('/simbolos-de-acordes', 'pages.chord-symbols')->name('pages.simbolos-de-acordes');
    Route::view('/buscador-de-acordes', 'pages.chord-converter')->name('pages.buscador-de-acordes');
    Route::view('/diagrama-de-acordes', 'pages.chord-diagram')->name('pages.diagrama-de-acordes');
    Route::view('/voces', 'pages.voicings')->name('pages.voces');
    Route::view('/ruptura-de-acordes', 'pages.broken-chord')->name('pages.ruptura-de-acordes');
    Route::view('/sustitucion-de-acordes', 'pages.substitutions')->name('pages.sustitucion-de-acordes');

});
