<?php

namespace App\Livewire\Backend\GalerySection;
use App\Models\Backend\SectionGalery\SectionGalery\Image;
use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImagesCreate extends Component
{

    use WithFileUploads;

    public $page;
    public $section;
    public $images = []; // Para almacenar las imágenes seleccionadas
    // public $isModalOpen = true; // Controla manualmente el estado del modal

    protected $rules = [
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ];

    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function imagesCreate()
    {
        $this->validate(); // Valida las imágenes

        foreach ($this->images as $image) 
        {
            $imagen = $image->store('uploads/images', 'public'); // Guarda la imagen
            Image::create([
                'filename' => basename($imagen),
                'section_id' => $this->section->section_type_id, // section_id correcto
            ]);
        }

        // Elimina las imágenes temporales después de guardar
        $this->clearTemporaryFiles();
        session()->flash('success', 'Imágenes subidas correctamente.');
        
        $this->reset('images'); // Limpia la propiedad de imágenes
        // return redirect()->route('section-gallery.index', [$this->page, $this->section]);
        // return view('livewire.backend.galery-section.images-index');
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
        // dd('desde create');
        return view('livewire.backend.galery-section.images-create');
    }
}
