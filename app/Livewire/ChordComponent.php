<?php

namespace App\Livewire;

use Livewire\Component;

class ChordComponent extends Component
{
    public $nota;

    public $variacion = null;

    public $notasValidas = [
        'c', 'c#', 'db', 'd', 'd#', 'eb', 'e', 'f', 'f#', 'gb', 'g', 'g#', 'ab',
        'a', 'a#', 'bb', 'b', 'am', 'em', 'dm', 'cm', 'bm', 'fm', 'gm', 'g#m', 'f#m',
    ];

    public $variacionesValidas = [
        'maj', 'min', '7', 'm7', 'maj7', 'mmaj7', '6', 'm6', '6-9', '5', '9', 'm9',
        'maj9', '11', 'm11', 'maj11', '13', 'm13', 'maj13', 'add', '7-5', '7+5', 'sus', 'dim',
        'dim7', 'm7b5', 'aug', 'aug7',
    ];

    public $infoAdicional = [];

    public $acordes = [];

    public function mount($nota, $variacion = null)
    {
        $this->nota = strtolower($nota);
        $this->variacion = strtolower($variacion);

        if (! in_array($this->nota, $this->notasValidas)) {
            abort(404, 'Nota no encontrada');
        }

        $this->infoAdicional = $this->obtenerInfoAdicional($this->nota);

        if ($this->variacion && ! in_array($this->variacion, $this->variacionesValidas)) {
            abort(404, 'Variación no encontrada');
        }

        $this->acordes = $this->generarAcordes($this->nota);
    }

    private function generarAcordes($nota)
    {
        $variacionesBase = $this->variacionesBase();
        $acordes = [];

        foreach ($variacionesBase as $clave => $descripcion) {
            $claveAcorde = str_replace('C', strtoupper($nota), $clave);
            $descripcionAcorde = str_replace('C', strtoupper($nota), $descripcion);
            $acordes[$claveAcorde] = $descripcionAcorde;
        }

        return $acordes;
    }

    private function obtenerInfoAdicional($nota)
    {
        return [
            'title' => 'Acordes de '.strtoupper($nota),
            'description' => 'Acordes para la nota '.strtoupper($nota).', incluyendo detalles y explicaciones.',
        ];
    }

    private function variacionesBase()
    {
        return [
            'C' => 'C mayor (C)',
            'Cm' => 'C menor',
            'C7' => 'C séptima dominante',
            'Cm7' => 'C séptima menor',
            'Cmaj7' => 'C séptima mayor (C7)',
            'Cmmaj7' => 'C menor séptima mayor',
            'C6' => 'C sexta mayor',
            'Cm6' => 'C sexta menor',
            'C6_9' => 'C sexta_novena (sexta añadida novena)',
            'C5' => 'C quinta',
            'C9' => 'C novena dominante',
            'Cm9' => 'C novena menor',
            'Cmaj9' => 'C novena mayor',
            'C11' => 'C onceava',
            'Cm11' => 'C onceava menor',
            'Cmaj11' => 'C onceava mayor',
            'C13' => 'C treceava',
            'Cm13' => 'C treceava menor',
            'Cmaj13' => 'C treceava mayor',
            'Cadd' => 'C añadida',
            'C7-5' => 'C séptima quinta disminuida',
            'C7+5' => 'C séptima quinta aumentada',
            'Csus' => 'C suspendida',
            'Cdim' => 'C disminuida (C°)',
            'Cdim7' => 'C séptima disminuida (C°7)',
            'Cm7b5' => 'C séptima menor bemol quinta (Cm7b5)',
            'Caug' => 'C aumentada (C+)',
            'Caug7' => 'C séptima aumentada',
        ];
    }

    // En el componente ChordComponent
    public function render()
    {
        return view('livewire.chord-component', [
            'infoAdicional' => $this->infoAdicional,
            'acordes' => $this->acordes,
        ]);
    }
}
