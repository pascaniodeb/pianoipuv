<?php

namespace App\Livewire;

use App\Helpers\ChordHelper;
use Livewire\Component;

class FilterComponent extends Component
{
    public $nota; // Nota seleccionada

    public $variaciones = []; // Variaciones a mostrar

    public $selectedFilter = 'all'; // Filtro seleccionado

    public $ordenNotas = ['c', 'c#', 'db', 'd', 'd#', 'eb', 'e', 'f', 'f#', 'gb', 'g', 'g#', 'ab', 'a', 'a#', 'bb', 'b'];

    public $categorias = [
        'all' => [],
        'mayor' => ['maj', 'maj7', '6', '6-9', 'maj9', 'maj11', 'maj13'],
        'menor' => ['min', 'm7', 'm6', 'm6-9', 'm9', 'm11', 'mmaj7', 'mmaj9'],
        'dominante' => ['7', '9', '11'],
        'disminuido' => ['dim', 'dim7', 'dim-half'],
        'aumentado' => ['aug', 'aug7'],
        'alterado' => ['7-5', '7+5', '7-9', '7+9', '7#11'],
        'misc' => ['5', 'add2', 'add4', 'add9', 'add11', 'sus2', 'sus4'],
    ];

    public function mount($nota)
    {
        $this->nota = strtolower($nota);

        // Validar la nota
        if (! in_array($this->nota, $this->ordenNotas)) {
            abort(404, 'Nota no encontrada');
        }

        // Inicializar todas las variaciones
        $this->variaciones = $this->getVariaciones('all');
    }

    private function getVariaciones($filter)
    {
        $variaciones = [];

        foreach ($this->categorias['all'] + $this->categorias[$filter] as $variacion) {
            $datosVariacion = ChordHelper::getVariacionData($this->nota, $variacion);
            if (! empty($datosVariacion)) {
                $variaciones[$variacion] = $datosVariacion;
            }
        }

        return $variaciones;
    }

    public function filterSelection($filter)
    {
        $this->selectedFilter = $filter;
        $this->variaciones = $this->getVariaciones($filter);
    }

    public function render()
    {
        return view('livewire.filter-component', [
            'variaciones' => $this->variaciones,
            'nota' => $this->nota,
        ]);
    }
}
