<?php

namespace App\Livewire\Backend\GallerySection;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Backend\Pages\Image;
use Illuminate\Support\Facades\Storage;

class ImagesIndex extends Component
{
    use WithPagination; // Usa el trait WithPagination
    public $section;

    protected $paginationTheme = 'tailwind'; // Usa estilos de Tailwind para la paginación
    protected $listeners = ['deleteSelectedImages'];

    public function deleteSelectedImages($selectedIds)
    {
        foreach ($selectedIds as $id) {
            $image = Image::find($id);
            if ($image) {
                // Eliminar el archivo físico del servidor
                if (Storage::disk('public')->exists('uploads/images/' . $image->filename)) {
                    Storage::disk('public')->delete('uploads/images/' . $image->filename);
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
        $images = Image::where('section_id', $this->section->id)->paginate(10);

        return view('livewire.backend.gallery-section.images-index', [
            'images' => $images,
        ]);
    }
}
