<?php

namespace App\Livewire\Backend\Activity;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Backend\Pages\ActivityImage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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

        // Crear el manager de imágenes
        ini_set('memory_limit', '256M');
        $manager = new ImageManager(
            new Driver()
        );

        $storagePath = "activity/galery";

        // Asegurarse de que el directorio principal existe
        ensureDirectoryExists(storage_path("app/public/{$storagePath}"));

        foreach ($this->images as $image) {
            // Guardar la imagen original en el almacenamiento
            $imagen = $image->store('activity/galery', 'public');
            $filename = pathinfo($imagen, PATHINFO_FILENAME);

            // Procesar la imagen original
            $img = $manager->read($image->getRealPath());
            $img->scale(1500, 1500);

            // Guardar las versiones de la imagen utilizando el helper
            saveImageVersion($img, 'jpeg', $storagePath, $filename, 80);
            saveImageVersion($img, 'webp', $storagePath, $filename, 80);
            saveImageVersion($img, 'png', $storagePath, $filename);

            // Guardar el thumbnail
            $thumbStoragePath = "{$storagePath}/thumbs";
            ensureDirectoryExists(storage_path("app/public/{$thumbStoragePath}")); // Asegura el directorio de thumbnails
            saveImageVersion($img->scale(width: 300), 'webp', $thumbStoragePath, $filename, 80);

            // Crear el registro en la base de datos
            ActivityImage::create([
                'image_url' => $filename,
                'thumbnail_url' => $filename,
                'activity_id' => $this->activity->id,
            ]);
        }

        $this->reset('images'); // Limpia la propiedad de imágenes

        // Elimina las imágenes temporales después de guardar
        clearTemporaryFiles();
        session()->flash('success', 'Imágenes subidas correctamente.');
        return redirect()->route('activities.show', $this->activity);
    }



    public function render()
    {
        return view('livewire.backend.activity.add-images-activity');
    }
}
