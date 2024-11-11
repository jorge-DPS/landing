<?php

namespace App\Livewire\Backend\PagesConfiguracion\Images;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;

class CreateImages extends Component
{

    public $page;
    public $section;

    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.backend.pages-configuracion.images.create-images', [
            'page' => $this->page,
            'section' => $this->section
        ]);
    }
}
