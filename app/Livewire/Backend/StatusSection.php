<?php

namespace App\Livewire\Backend;

use App\Models\Section;
use Livewire\Component;

class StatusSection extends Component
{

    public $section;
    public $estado;

    public function mount(Section $section){
        $this->section = $section;
        $this->estado = $section->status;
    }

    public function status(){
     
        dd($this->section);

        // Actualizar el estado directamente
        if ($this->section->status) {
            Section::where('id', $this->section->id)->update(['status' => false]); //Cambia el status al valor contrario
            $this->estado = false;
        }else {
            Section::where('id', $this->section->id)->update(['status' => true]); // Cambia el status al valor contrario
            $this->estado = true;
        }
    }

    public function render()
    {
        $status=$this->section->status;
        // dd($status);
        return view('livewire.backend.status-section');
    }
}
