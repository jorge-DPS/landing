<?php

namespace App\Livewire\Backend\Sections;

use App\Models\Section;
use Livewire\Component;

class SectionEdit extends Component
{
    public $title;
    public $section;
    public $page;

    protected $rules = [
        'title' => 'required|string|max:255',
    ];

    public function mount($section, $page)
    {
        $this->section = $section;
        $this->page = $page;
        $this->title = $section->title;
    }

    public function saveTitle($newTitle)
    {

        // Validación adicional para cadenas vacías
        if ($newTitle == "" || $newTitle == null) {
            $newTitle= $this->section->title;
        }
        
        
        if ($this->section) {
            // dd($newTitle);
            $this->section->update([
                'title' => $newTitle,
            ]);

            // Opcional: Emitir un evento para confirmar que se guardó
            $this->dispatch('titleSaved', $this->section->id);
        }
    }

    public function render()
    {
        return view('livewire.backend.sections.section-edit');
    }
}
