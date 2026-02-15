<?php

namespace App\Livewire;

use Livewire\Component;

class BassAlternativeComponent extends Component
{
    public $nota;

    public $variacion;

    public $alternativas = [];

    public function mount($nota, $variacion)
    {
        $this->nota = strtoupper($nota); // Convertir la nota a mayúsculas
        $this->variacion = strtolower($variacion); // Convertir la variación a minúsculas

        // Validar si la variación es válida
        $variacionesConBajo = ['maj', 'min', '7', 'm7'];
        if (! in_array($this->variacion, $variacionesConBajo)) {
            abort(404, 'Esta variación no tiene notas de bajo alternativas.');
        }

        // Cargar los datos desde el archivo de configuración
        $datos = config("chord-alternative.{$this->nota}.{$this->variacion}");

        if (! $datos) {
            abort(404, "No se encontraron datos para la nota '{$this->nota}' y la variación '{$this->variacion}'.");
        }

        $this->alternativas = $datos;
    }

    private function getAlternativas($nota, $variacion)
    {
        $nota = strtoupper($nota); // Asegúrate de que la nota esté en mayúsculas
        $variacion = strtolower($variacion); // La variación en minúsculas

        // Obtener los datos del archivo de configuración
        $data = config("chord-alternative.$nota.$variacion", []);

        // Validar que existan datos para la nota y variación
        if (empty($data)) {
            abort(404, 'No se encontró información para esta nota y variación.');
        }

        return $data;
    }

    public function render()
    {
        if (empty($this->alternativas)) {
            abort(404, 'No se encontraron alternativas para esta variación.');
        }

        return view('livewire.bass-alternative-component', [
            'explicacionTeoria' => $this->alternativas['explicacion_teoria'] ?? [],
            'alternativas' => $this->alternativas['alternativas'] ?? [],
        ]);
    }
}
