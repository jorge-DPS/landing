<?php

namespace App\Livewire\Frontend\Page\Pages;

use Livewire\Component;

class Contact extends Component
{
    public $page;
    public function render()
    {
        // $this->page;
        return view('livewire.frontend.page.pages.contact');
    }
}
