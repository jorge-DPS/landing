<?php

namespace App\Livewire\Backend\Activity;

use App\Models\Backend\Pages\Activity;
use App\Models\Backend\Pages\ActivityImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ImagesActivity extends Component
{
    use WithPagination;

    public $activity;
    // public $imagenes;

    protected $listeners = ['deleteSelectedImages'];

    // public function mount(Activity $activity)
    // {
    //     $this->activity = $activity->load('images'); // Carga la relación 'images'
    //     $this->imagenes = $this->activity->images;
    //     // dd($this->activity->images);
    // }

    public function deleteSelectedImages($selectedIds)
    {
        foreach ($selectedIds as $id) {
            $image = ActivityImage::find($id);
            if ($image) {
                // Obtener el nombre base de la imagen (sin la extensión)
                $baseFileName = $image->image_url;  // El nombre del archivo sin extensión

                // Listar los directorios donde buscar archivos
                $directories = [
                    'activity/galery',
                    'activity/galery/thumbs',
                ];

                // Recorrer cada directorio y buscar las imágenes correspondientes
                foreach ($directories as $directory) {
                    // Buscar todos los archivos en el directorio actual
                    $imageFiles = Storage::disk('public')->files($directory);

                    // Filtrar los archivos que tengan el mismo nombre base (sin extensión)
                    $imagesToDelete = array_filter($imageFiles, function ($file) use ($baseFileName) {
                        // Compara el nombre base del archivo (sin extensión) con el nombre de la imagen en la base de datos
                        return strpos(basename($file), $baseFileName) === 0; // Verifica que el nombre base coincida
                    });

                    // Eliminar cada archivo encontrado
                    foreach ($imagesToDelete as $fileToDelete) {
                        if (Storage::disk('public')->exists($fileToDelete)) {
                            Storage::disk('public')->delete($fileToDelete);
                        }
                    }
                }

                // Eliminar el registro de la base de datos
                $image->delete();
            }
        }

        session()->flash('message', 'Imágenes eliminadas correctamente.');

        $this->resetPage(); // Reinicia la paginación a la página 1
    }

    public function render()
    {
        $imagenes = $this->activity->images()->paginate(8);
        return view('livewire.backend.activity.images-activity', [
            'imagenes' => $imagenes,
        ]);
    }
}
