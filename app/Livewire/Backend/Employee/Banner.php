<?php

namespace App\Livewire\Backend\Employee;

use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banner extends Component
{
    use WithFileUploads;

    public $section;

    public $existingBanner;
    public $banner;

    public function mount(Section $section){
        $this->section = $section;
        $this->existingBanner = $this->section->banner;
    }

    protected $rules = [
        'banner' => 'image|max:2048', // Máximo 2MB
    ];

    public function save()
    {
        $datos = $this->validate();
        // dd($datos);

        $datos = $this->validate();
        if ($this->banner) {
            $this->deleteOldImage();
            $imagen = $this->banner->store('employees/banner', 'public');
            $datos['banner'] = basename($imagen); // Solo el nombre de la imagen
        }

        // $section = Section::find($this->section->id);
        $this->section->banner = $datos['banner'];
        $this->section->save();

        // Aquí podrías guardar la ruta en la base de datos o realizar otras acciones
        clearTemporaryFiles();
        session()->flash('success', '¡Banner subido exitosamente!');
        
        // Limpiar el input
        $this->reset('banner');
    }

    /**
     * Elimina la imagen anterior de la portada si existe.
     */
    protected function deleteOldImage()
    {
        if ($this->section->banner && Storage::disk('public')->exists('employees/banner/' . $this->section->banner)) {
            Storage::disk('public')->delete('employees/banner/' . $this->section->banner);
        }
    }

    public function render()
    {
        // dd(asset('storage/employees/banner/' . $this->section->banner) );
        return view('livewire.backend.employee.banner', [
            'banner' => $this->section,
        ]);
    }
}
