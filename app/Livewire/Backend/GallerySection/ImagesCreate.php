<?php

namespace App\Livewire\Backend\GallerySection;

use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Backend\Pages\Image;
use Illuminate\Support\Facades\Storage;

class ImagesCreate extends Component
{
    use WithFileUploads;

    public $page;
    public $section;
    public $images = [];

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
                'section_id' => $this->section->id, // section_id correcto
            ]);
        }
        $this->reset('images'); // Limpia la propiedad de imágenes

        // Elimina las imágenes temporales después de guardar
        $this->clearTemporaryFiles();
        session()->flash('success', 'Imágenes subidas correctamente.');
        
        return redirect()->route('section-gallery.index', [$this->page, $this->section]);
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
        return view('livewire.backend.gallery-section.images-create');
    }
}
