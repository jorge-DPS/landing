<?php

namespace App\Livewire\Backend\Alertas;

use Livewire\Component;

class MostrarAlerta extends Component
{
    public $message;
    
    public function render()
    {
        return view('livewire.backend.alertas.mostrar-alerta');
    }
}
