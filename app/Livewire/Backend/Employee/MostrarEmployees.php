<?php

namespace App\Livewire\Backend\Employee;

use App\Models\Section;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Page;
use Livewire\WithPagination;

class MostrarEmployees extends Component
{
    use WithPagination;

    public $section;
    public $page;

    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function render()
    {
        // Usa section_id directamente si se refiere al ID relacionado
        $employees = Employee::where('section_id', $this->section->section_type_id)
            ->paginate(3);

        return view('livewire.backend.employee.mostrar-employees', [
            'employees' => $employees,
            'section' => $this->section,
            'page' => $this->page,
        ]);
    }
}