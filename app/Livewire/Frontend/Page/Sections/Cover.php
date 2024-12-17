<?php

namespace App\Livewire\Frontend\Page\Sections;

use App\Models\Section;
use Livewire\Component;

class Cover extends Component
{
    public $section;

    public function mount(Section $section)
    {
        $this->section = $section;
    }
    
    public function render()
    {
        $cover = $this->section->cover;
        $name = $this->section->title;

        // dd($this->section->cover);

        return view('livewire.frontend.page.sections.cover', [
            'cover' => $cover,
            'name' => $name,
            'section' => $this->section,
        ]);
    }
}
