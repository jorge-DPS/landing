<?php

namespace App\Livewire\Backend\Employee;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class MostrarEmployees extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind'; // Usa estilos de Tailwind para la paginación
    protected $listeners = ['eliminarEmployee'];


    public $section;
    public $page;

    // public $employees = [];


    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;

    }

    #[On('eliminar-empleado')]
    public function eliminarEmployee($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        // dd($employee);
        // Verificar si el empleado tiene una imagen
        if ($employee->image && Storage::disk('public')->exists('employees/' . $employee->image)) {
            // Eliminar la imagen del almacenamiento
            Storage::disk('public')->delete('employees/' . $employee->image);
        }

        // Eliminar el registro del empleado
        $employee->delete();
        
        $this->dispatch('empleado-eliminado');
        // $this->resetPage();
        // return redirect()->route('employees.index', [$this->page, $this->section]);

        

    }


    public function render()
    {
        $employees = Employee::where('section_id', $this->section->id)->paginate(12);

        return view('livewire.backend.employee.mostrar-employees', [
            'employees' => $employees,
            'section' => $this->section,
            'page' => $this->page,
        ]);
    }
}
