<?php

namespace App\Livewire\Backend\SectionPortada;

use App\Models\Backend\Pages\Cover;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortadaEdit extends Component
{
    use WithFileUploads;

    // Propiedades del formulario
    public $title;
    public $subtitle;
    public $description;
    public $image;
    public $status;
    public $button_text;
    public $button_url;
    public $open_in_new_tab;

    public $image_new;
    public $section_id;

    public $section;
    public $page;
    public $cover;

    // Reglas de validación
    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
        'image_new' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        'status' => 'required|boolean',
        'button_text' => 'nullable|string|max:255',
        'button_url' => 'nullable|string',
        'open_in_new_tab' => 'required|boolean',
    ];

    /**
     * Inicializa las propiedades del componente con los datos de la portada.
     */
    public function mount(Cover $cover, $section, $page)
    {
        $this->cover = $cover;
        $this->section = $section;
        $this->page = $page;

        // Asigna los datos de la portada a las propiedades del componente
        $this->title = $cover->title;
        $this->subtitle = $cover->subtitle;
        $this->description = $cover->description;
        $this->image = $cover->image;
        $this->status = $cover->status;
        $this->button_text = $cover->button_text;
        $this->button_url = $cover->button_url;
        $this->open_in_new_tab = $cover->open_in_new_tab;
        $this->section_id = $section->id;
    }

    /**
     * Actualiza los datos de la portada.
     */
    public function editCover()
    {
        $datos = $this->validate(); // Valida los datos del formulario

        // Si se ha subido una nueva imagen, maneja la eliminación de la anterior
        if ($this->image_new) {
            $this->deleteOldImage();
            $this->saveNewImage($datos);
        }

        // Actualiza los datos de la portada en la base de datos
        $this->updateCover($datos);

        // Limpia archivos temporales y muestra un mensaje de éxito
        clearTemporaryFiles();
        session()->flash('mensaje', 'El cover se actualizó correctamente');

        // Redirige a la página de portada
        return redirect()->route('portada.index', [$this->page, $this->section]);
    }

    /**
     * Elimina la imagen anterior de la portada si existe.
     */
    protected function deleteOldImage()
    {
        if ($this->cover->image && Storage::disk('public')->exists('cover/images/' . $this->cover->image)) {
            Storage::disk('public')->delete('cover/images/' . $this->cover->image);
        }
    }

    /**
     * Guarda la nueva imagen y asigna su nombre en el array de datos.
     */
    protected function saveNewImage(&$datos)
    {
        $imagen = $this->image_new->store('cover/images', 'public');
        $datos['image'] = basename($imagen);
    }

    /**
     * Actualiza los datos de la portada en la base de datos.
     */
    protected function updateCover($datos)
    {
        $cover = Cover::find($this->cover->id); // Busca la portada a actualizar
        $cover->update($datos); // Actualiza la portada con los nuevos datos
    }

    /**
     * Limpia los archivos temporales cuando el componente se desmonta.
     */
    public function unmount()
    {
        clearTemporaryFiles();
    }

    /**
     * Renderiza la vista del componente.
     */
    public function render()
    {
        return view('livewire.backend.section-portada.portada-edit');
    }
}
