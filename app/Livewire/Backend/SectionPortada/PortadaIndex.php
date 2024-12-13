<?php

namespace App\Livewire\Backend\SectionPortada;

use App\Models\Backend\Pages\Cover;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class PortadaIndex extends Component
{
    use WithPagination;

    protected $listeners = ['deleteCover'];

    protected $paginationTheme = 'tailwind'; // Usa estilos de Tailwind para la paginación

    public $section;
    public $page;

    public function mount(Section $section, Page $page)
    {
        $this->section = $section;
        $this->page = $page;
    }

    public function deleteCover(Cover $cover, Section $section)
    {
        // Verificar si el cover tiene una imagen
        if ($cover->image && Storage::disk('public')->exists('cover/images/' . $cover->image)) {
            // Eliminar la imagen del almacenamiento
            Storage::disk('public')->delete('cover/images/' . $cover->image);
        }

        // Eliminar el registro del cover
        $cover->delete();
    }

    public function render()
    {
        // Obtener la portada asociada a la sección
        $cover = Cover::where('section_id', $this->section->id)->first();

        return view('livewire.backend.section-portada.portada-index', [
            'cover' => $cover // Pasa una sola portada si existe
        ]);
    }
}
