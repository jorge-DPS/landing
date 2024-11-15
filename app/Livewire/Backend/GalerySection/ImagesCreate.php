<?php

namespace App\Livewire\Backend\GalerySection;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImagesCreate extends Component
{

    use WithFileUploads;

    public $page;
    public $section;
    public $images = []; // Para almacenar las imágenes seleccionadas
    // public $isModalOpen = true; // Controla manualmente el estado del modal

    protected $rules = [
        'images.*' => 'image|max:2048', // Valida cada archivo como imagen y máximo 2MB
    ];


    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }



    public function imagesCreate()
    {
 
        $datos = $this->validate();
        dd($this->validate());

        foreach ($this->images as $image) {
            $imagen = $image->store('uploads/images', 'public'); // Guarda cada imagen en public/uploads/images

            $datos['image'] = basename($imagen);
        }
        // $this->isModalOpen = false; // Cierra el modal después de enviar (si controlas el modal con una propiedad)

        session()->flash('success', 'Imágenes subidas correctamente.');
        $this->reset('images'); // Limpia el input de imágenes
        $this->isModalOpen = false; // Cierra el modal después de enviar
    }

    public function openModal()
    {
        $this->isModalOpen = true; // Abre el modal
    }


    public function render()
    {
        // dd('desde create');
        return view('livewire.backend.galery-section.images-create');
    }
}
