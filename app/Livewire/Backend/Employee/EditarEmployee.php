<?php

namespace App\Livewire\Backend\Employee;

use App\Models\Employee;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditarEmployee extends Component
{

    public $section;
    public $page;

    public $empleado_id;
    public $name;
    public $position;
    public $status;
    public $image;
    public $image_new;

    public $section_id;
    public $employee;

    use WithFileUploads;

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'image_new' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|boolean',
        'section_id' => 'required',
    ];

    public function mount(Employee $employee, $section, $page){
        // $this->id = $employee->id; //->// esto no va a funcionar; por que el this->id; es algo asi como una palabra reservada
        $this->employee = $employee;
        $this->page = $page;
        $this->section = $section;

        $this->empleado_id = $employee->id;
        $this->name = $employee->name;
        $this->position = $employee->position;
        $this->status = $employee->status;
        $this->image = $employee->image;
        $this->section_id = $employee->section_id;
    }

    public function editarEmployee()
    {

        $datos = $this->validate();

        // Si hay una nueva imagen
        if ($this->image_new) {

            // Verificar y eliminar la imagen antigua si existe
            $filePath = 'employees/' . $this->employee->image;

            // dd($this->employee->image && Storage::disk('public')->exists('employees/' . $this->employee->image));
            // if (!Storage::disk('public')->exists($filePath)) {
            //     dd("Archivo no encontrado: " . $filePath);
            // } else {
            //     dd("Archivo encontrado: " . $filePath);
            // }
            if ($this->employee->image && Storage::disk('public')->exists('employees/' . $this->employee->image)) {
                // dd('si borrara');
                Storage::disk('public')->delete('employees/' . $this->employee->image);
            }

            $imagen = $this->image_new->store('employees', 'public');
            $datos['image'] = basename($imagen);
            // dd($datos['image']);
        }

        // Encontrar al empleado a editar
        $employee = Employee::find($this->empleado_id);

        //asignar los valores
        $employee->name = $datos['name'];
        $employee->position = $datos['position'];
        $employee->status = $datos['status'];
        $employee->image = $datos['image'] ?? $employee->image;
        $employee->section_id = $datos['section_id'];

        $employee->save();

        // redireccionar
        session()->flash('mensaje', 'El empleado se actualizó correctamente');
        // return redirect()->route('employees.index', [$this->page, $this->section]);
        return redirect()->route('employees.index', [$this->page, $this->section]);

    }

    public function render()
    {
        // dd($this->employee);
        return view('livewire.backend.employee.editar-employee');
    }
}
