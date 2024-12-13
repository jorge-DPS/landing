<?php

namespace App\Livewire\Backend\SectionPortada;

use App\Models\Backend\Pages\Cover;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortadaCreate extends Component
{

    use WithFileUploads;
    
    // Propiedades que coinciden con los campos del formulario

    public $title;
    public $subtitle;
    public $description;
    public $image;
    public $status;
    public $button_text;
    public $button_url;
    public $open_in_new_tab;

    public $section;
    public $page;

    // Reglas de validación para el formulario
    protected $rules = [
        // 'section_id' => 'required|exists:sections_public,id', // Asegúrate de que la sección existe
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024', // Validación para la imagen
        'status' => 'required|boolean',
        'button_text' => 'nullable|string|max:255',
        'button_url' => 'nullable',
        'open_in_new_tab' => 'required|boolean',
    ];

    

    public function mount($section, $page)
    {
        $this->page = $page;
        $this->section = $section;
        // $this->section_id = $section->id; // Inicializar `section_id` desde el modelo
    }

    public function createCover()
    {
        // Validar los datos
        
        $datos = $this->validate();
        if ($this->image) {
            $imagen = $this->image->store('cover/images', 'public');
            $datos['image'] = basename($imagen); // Solo el nombre de la imagen
        } else {
            $datos['image'] = null; // Si no hay imagen, asignar `null`
        }

        Cover::create([
            'title' => $datos['title'],
            'subtitle' => $datos['subtitle'],
            'description' => $datos['description'],
            'image' => $datos['image'],  // Guardar la ruta de la imagen
            'status' => $datos['status'],
            'button_text' => $datos['button_text'],
            'button_url' => $datos['button_url'],
            'open_in_new_tab' => $datos['open_in_new_tab'],
            'section_id' => $this->section->id,
        ]);
        // $this->reset();
        $this->reset('image'); // Limpia la propiedad de imágenes

        // Elimina las imágenes temporales después de guardar
        $this->clearTemporaryFiles();
        // Feedback para el usuario (puedes usar una notificación o flash message)
        session()->flash('message', 'Portada creada con éxito!');
        return redirect()->route('portada.index', ['page' => $this->page, 'section' => $this->section]);
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
        return view('livewire.backend.section-portada.portada-create');
    }
}
