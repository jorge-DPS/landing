<?php

namespace App\Livewire\Backend\Employee;

use Livewire\Component;

class MostrarAlerta extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.backend.employee.mostrar-alerta');
    }
}