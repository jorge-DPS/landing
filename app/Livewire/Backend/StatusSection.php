<?php

namespace App\Livewire\Backend;

use App\Models\Section;
use Livewire\Component;

class StatusSection extends Component
{

    public $section;
    public $estado;

    public function mount(Section $section)
    {
        $this->section = $section;
        $this->estado = $section->status;
    }

    public function status()
    {

        $nameSectionType = $this->section->sectionType->name;
        // Define un array con las relaciones dinámicas basadas en sectionType
        $relations = [
            'Persona' => ['employees'],
            'Galeria' => ['images'],
            'Portada' => ['cover'],
        ];

        // Obtén el nombre del tipo de sección
        $nameSectionType = $this->section->sectionType->name;
        $relacion = $relations[$nameSectionType][0];
        
        if (!$this->section->$relacion()->exists()) {
            // No existe su relacion
            $this->dispatch('showAlert', [
                'title'=>'Configuración requerida', 
                'message' =>'Antes de proceder, configura esta sección para que exista información disponible.', 
                'icon' => 'warning'
            ]);
            return;
        }

        // Actualizar el estado directamente
        if ($this->section->status) {
            Section::where('id', $this->section->id)->update(['status' => false]); //Cambia el status al valor contrario
            $this->estado = false;
        } else {
            Section::where('id', $this->section->id)->update(['status' => true]); // Cambia el status al valor contrario
            $this->estado = true;
        }
    }

    public function render()
    {
        $status = $this->section->status;
        // dd($status);
        return view('livewire.backend.status-section');
    }
}
