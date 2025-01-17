<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $title = 'Actividades';
        return view('livewire.frontend.partials.header', [
            'title' => $title,
        ]);
    }
}
