<?php

namespace App\Livewire\Backend\Employee;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

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
        'section_id' => 'required',
    ];

    public function mount($section, $page)
    {
        $this->section = $section;
        $this->page = $page;
        $this->section_id = $section->id;
    }

    public function employeeCreate()
    {
        $datos = $this->validate();

        if ($this->image) {
            $imagen = $this->image->store('employees', 'public');
            $datos['image'] = basename($imagen);
        } else {
            $datos['image'] = null;
        }

        Employee::create([
            'name' => $datos['name'],
            'position' => $datos['position'],
            'image' => $datos['image'],
            'status' => $datos['status'],
            'section_id' => $this->section_id,
        ]);

        $this->clearTemporaryFiles();

        session()->flash('mensaje', 'Empleado creado exitosamente.');
        return redirect()->route('employees.index', [$this->page, $this->section]);
    }

    public function clearTemporaryFiles()
    {
        $tempDirectory = 'livewire-tmp';
        $files = Storage::disk('local')->files($tempDirectory);

        foreach ($files as $file) {
            Storage::disk('local')->delete($file);
        }
    }

    public function unmount()
    {
        $this->clearTemporaryFiles();
    }

    public function render()
    {
        return view('livewire.backend.employee.employee-create');
    }
}
