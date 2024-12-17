<?php

namespace App\Livewire\Frontend\Page\Sections;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;

class Image extends Component
{
    public $section;
    public $page;
    
    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function render()
    {
        $images = $this->section->images;
        $name = $this->section->title;
        
        return view('livewire.frontend.page.sections.image', [
            'images' => $images,
            'name' => $name,
            'page' => $this->page,
        ]);
    }
}
