<?php

namespace App\Livewire\Backend\Employee;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class MostrarEmployees extends Component
{


    protected $listeners = ['eliminarEmployee'];

    use WithPagination;

    public $section;
    public $page;


    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    // #[On('eliminarEmployee'),section]
    public function eliminarEmployee(Employee $employee, Section $section)
    {
        // Verificar si el empleado tiene una imagen
        if ($employee->image && Storage::disk('public')->exists('employees/' . $employee->image)) {
            // Eliminar la imagen del almacenamiento
            Storage::disk('public')->delete('employees/' . $employee->image);
        }

        // Eliminar el registro del empleado
        $employee->delete();
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
