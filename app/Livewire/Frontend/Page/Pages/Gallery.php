<?php

namespace App\Livewire\Frontend\Page\Pages;

use Livewire\Component;

class Gallery extends Component
{
    public $section;
    public $page;
    public function render()
    {
        $images = $this->section->images;
        return view('livewire.frontend.page.pages.gallery', [
            'section' => $this->section,
            'images' => $images,
        ]);
    }
}
