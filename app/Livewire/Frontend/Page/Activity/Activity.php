<?php

namespace App\Livewire\Frontend\Page\Activity;

use Livewire\Component;

class Activity extends Component
{
    public $activities;

    public function mount(){

    }

    public function render()
    {
        return view('livewire.frontend.page.activity.activity', [
            'activities' => $this->activities,
        ]);
    }
}
