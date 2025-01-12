<?php

namespace App\Livewire\Backend\Activity;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Backend\Pages\Activity;

class CreateActivity extends Component
{

    use WithFileUploads;

    public $name;
    public $description = ''; // Contenido del editor Quill
    public $start_date;
    public $end_date;
    public $cover_image;
    public $attachment; // Propiedad para el archivo
    public $attachment_title; // Propiedad para el título del archivo

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'cover_image' => 'nullable|image|max:2048',
        'attachment' => 'nullable|mimes:pdf|max:2048', // Permite solo PDFs
        'attachment_title' => 'nullable|string|max:255',
    ];

    public function createActivity()
    {
        $datos=$this->validate();

        // Procesar imagen de portada
        if ($this->cover_image) {
            $cover_image = $this->cover_image->store('activity', 'public');
            $datos['cover_image'] = basename($cover_image); // Solo el nombre de la imagen
        } else {
            $datos['cover_image'] = null; // Si no hay imagen, asignar `null`
        }

        // Procesar archivo adjunto (PDF)
        if ($this->attachment) {
            $uniqueName = Str::uuid() . '.pdf';
            $this->attachment->storeAs('activity/attachments', $uniqueName, 'public'); // Cambiar la carpeta de almacenamiento
            $datos['attachment'] = $uniqueName; // Guardar el nombre único del archivo
        } else {
            $datos['attachment'] = null; // Si no hay archivo, asignar `null`
        }

        Activity::create([
            'name' => $datos['name'],
            'description' => $datos['description'],
            'start_date' => $datos['start_date'],
            'end_date' => $datos['end_date'],
            'cover_image' => $datos['cover_image'],
            'attachment' => $datos['attachment'],
            'attachment_title' => $datos['attachment_title'] ?? null,
        ]);

        clearTemporaryFiles();
        session()->flash('message', 'Actividad creada exitosamente.');
        $this->reset();
        return redirect()->route('activities.index');
    }

    public function render()
    {
        return view('livewire.backend.activity.create-activity');
    }
}