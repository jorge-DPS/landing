<?php

namespace App\Livewire\Backend\Activity;

use App\Models\Backend\Pages\Activity;
use App\Models\Backend\Pages\ActivityImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddImagesActivity extends Component
{
    use WithFileUploads;

    public $activity;
    public $images = [];

    protected $rules = [
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ];

    public function imagesCreate()
    {
        $this->validate(); // Valida las imágenes

        foreach ($this->images as $image) 
        {
            $imagen = $image->store('activity/galery', 'public'); // Guarda la imagen
            ActivityImage::create([
                'image_url' => basename($imagen),
                
                'activity_id' => $this->activity->id, // section_id correcto
            ]);
        }
        $this->reset('images'); // Limpia la propiedad de imágenes

        // Elimina las imágenes temporales después de guardar
        clearTemporaryFiles();
        session()->flash('success', 'Imágenes subidas correctamente.');
        // return view('livewire.backend.galery-section.images-index');
    }

    
    public function render()
    {
        return view('livewire.backend.activity.add-images-activity');
    }
}
