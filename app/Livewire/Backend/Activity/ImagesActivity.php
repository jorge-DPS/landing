<?php

namespace App\Livewire\Backend\Activity;

use App\Models\Backend\Pages\ActivityImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ImagesActivity extends Component
{
    use WithPagination;
    
    public $activity;

    protected $listeners = ['deleteSelectedImages'];

    public function deleteSelectedImages($selectedIds)
    {
        foreach ($selectedIds as $id) {
            $image = ActivityImage::find($id);
            if ($image) {
                // Eliminar el archivo físico del servidor
                if (Storage::disk('public')->exists('activity/galery/' . $image->image_url)) {
                    Storage::disk('public')->delete('activity/galery/' . $image->image_url);
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
        $images = ActivityImage::where('activity_id', $this->activity->id)->paginate(8);
        // dd($images);
        return view('livewire.backend.activity.images-activity', [
            'images' => $images,
        ]);
    }
}
