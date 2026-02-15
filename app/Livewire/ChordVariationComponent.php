<?php

namespace App\Livewire;

use App\Helpers\ChordHelper;
use App\Helpers\InversionHelper;
use Livewire\Component;

class ChordVariationComponent extends Component
{
    public $nota;

    public $variacion;

    public $notaAnterior;

    public $notaSiguiente;

    public $variacionData = [];

    protected $ordenNotas = ['c', 'c#', 'db', 'd', 'd#', 'eb', 'e', 'f', 'f#', 'gb', 'g', 'g#', 'ab', 'a', 'a#', 'bb', 'b'];

    public function mount($nota, $variacion)
    {
        $this->nota = strtolower($nota);
        $this->variacion = strtolower($variacion);

        // Validar nota y variación
        if (! in_array($this->nota, $this->ordenNotas)) {
            abort(404, 'Nota no encontrada');
        }

        // Calcular nota anterior y siguiente
        $indiceActual = array_search($this->nota, $this->ordenNotas);
        $this->notaAnterior = $this->ordenNotas[($indiceActual - 1 + count($this->ordenNotas)) % count($this->ordenNotas)];
        $this->notaSiguiente = $this->ordenNotas[($indiceActual + 1) % count($this->ordenNotas)];

        // Obtener datos de la variación
        $this->variacionData = $this->getVariacionData($this->nota, $this->variacion);

        // Obtener inversiones dinámicamente usando el helper
        $inversiones = InversionHelper::generateInversions($this->nota, $this->variacion);

        // Si existen inversiones, agregarlas a los datos de la variación
        if (! empty($inversiones)) {
            $this->variacionData['inversiones'] = $inversiones;
        }
    }

    private function getVariacionData($nota, $variacion)
    {
        return ChordHelper::getVariacionData($nota, $variacion);
    }

    public function render()
    {
        return view('livewire.chord-variation-component', [
            'notaAnterior' => $this->notaAnterior,
            'notaSiguiente' => $this->notaSiguiente,
            'variacionesValidas' => [
                'maj', 'min', '7', 'm7', 'maj7', 'mmaj7', '6', 'm6', '6-9', '5', '9', 'm9',
                'maj9', '11', 'm11', 'maj11', '13', 'm13', 'maj13', 'add', '7-5', '7+5', 'sus', 'dim',
                'dim7', 'm7b5', 'aug', 'aug7',
            ],
        ]);
    }
}
