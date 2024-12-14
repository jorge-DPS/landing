<?php

namespace App\Livewire\Frontend\Page\Sections;

use App\Models\Section;
use Livewire\Component;

class Images extends Component
{
    public $section;
    
    public function mount(Section $section)
    {
        $this->section = $section;
    }
    
    public function render()
    {
        $images = $this->section->images;
        $name = $this->section->title;

        return view('livewire.frontend.page.sections.images', [
            'images' => $images,
            'name' => $name,
        ]);
    }
}
