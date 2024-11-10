<?php

namespace App\Livewire\Backend\Employee;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class EmployeeCreate extends Component
{


    public $section;
    public $page;

    public $name;
    public $position;
    public $image;
    public $status;
    public $section_id;

    use WithFileUploads;

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|boolean',
        'section_id' => 'required',
    ];

    public function mount($section, $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function employeeCreate()
    {

        // dd();
        $datos = $this->validate();

        $imagen = $this->image->store('employees', 'public');
        $datos['image'] = basename($imagen); // Esto devuelve 'filename.jpg'// -> aqui solo quermos el nombre de la imgen y no toda la duta (public/vancates/---)
        // dd($datos['image']);

        // $imagePath = $this->image ? $this->image->store('images/employees', 'public') : null;

        Employee::create([
            'name' => $datos['name'],
            'position' => $datos['position'],
            'image' => $datos['image'],
            'status' => $datos['status'],
            'section_id' => $this->section->section_type_id
        ]);

        session()->flash('mensaje', 'Empleado creado exitosamente.');
        return redirect()->route('employees.index', [$this->page, $this->section]);
    }

    public function render()
    {
        return view('backend.pagesConfigurations.livewire.employee.employee-create');
    }
}