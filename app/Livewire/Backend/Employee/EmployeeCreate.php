<?php

namespace App\Livewire\Backend\Employee;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class EmployeeCreate extends Component
{
    use WithFileUploads;

    public $section;
    public $page;

    public $name;
    public $position;
    public $image;
    public $status;
    public $section_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|boolean',
        'section_id' => 'required', // Verificación de existencia
    ];

    public function mount($section, $page)
    {
        $this->section = $section;
        $this->page = $page;
        $this->section_id = $section->id; // Inicializar `section_id` desde el modelo
    }

    public function employeeCreate()
    {
        $datos = $this->validate();

        if ($this->image) {
            $imagen = $this->image->store('employees', 'public');
            $datos['image'] = basename($imagen); // Solo el nombre de la imagen
        } else {
            $datos['image'] = null; // Si no hay imagen, asignar `null`
        }

        Employee::create([
            'name' => $datos['name'],
            'position' => $datos['position'],
            'image' => $datos['image'],
            'status' => $datos['status'],
            'section_id' => $this->section_id, // Utilizar el ID correcto
        ]);

        session()->flash('mensaje', 'Empleado creado exitosamente.');
        return redirect()->route('employees.index', [$this->page, $this->section]);
    }

    public function render()
    {
        return view('livewire.backend.employee.employee-create');
    }
}
