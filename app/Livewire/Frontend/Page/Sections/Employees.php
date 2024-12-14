<?php

namespace App\Livewire\Frontend\Page\Sections;

use App\Models\Section;
use Livewire\Component;

class Employees extends Component
{
    public $section;
    public $page;
    
    public function mount(Section $section)
    {
        $this->section = $section;
    }
    public function render()
    {
        // Verifica si la relación 'employees' está cargada
        $employees = $this->section->employees;
        $name = $this->section->title;

        return view('livewire.frontend.page.sections.employees', [
            'page' => $this->page,
            'section' => $this->section,
            'employees' => $employees,
            'name' => $name,
        ]);
    }
}
