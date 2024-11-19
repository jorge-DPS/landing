<?php

namespace App\Livewire\Backend\GalerySection;

use App\Models\Backend\SectionGalery\SectionGalery\Image;
use App\Models\Page;
use App\Models\Section;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ImagesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'tailwind'; // Usa estilos de Tailwind para la paginación
    protected $listeners = ['deleteSelectedImages'];

    public $page;
    public $section;

    public function mount(Page $page,  Section $section)
    {
        $this->page = $page;
        $this->section = $section;
    }

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
    }



    public function render()
    {

        $images = Image::where('section_id', $this->section->section_type_id)->paginate(3);


        // dd($images);

        return view('livewire.backend.galery-section.images-index', [
            'images' => $images,
        ]);

        //aquiii
    }
}
