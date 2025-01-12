<?php

namespace App\Livewire\Backend\Activity;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditActivity extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $start_date;
    public $end_date;
    public $cover_image;
    public $cover_image_new;
    // pdf
    public $new_attachment;
    public $attachment_title;

    public $activity;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'cover_image_new' => 'nullable|image|max:2048',
        'new_attachment' => 'nullable|mimes:pdf|max:2048', // Permite solo PDFs
        'attachment_title' => 'nullable|string|max:255',
    ];

    public function mount($activity)
    {
        $this->name = $activity->name;
        $this->description = $activity->description;
        $this->start_date = $activity->start_date;
        $this->end_date = $activity->end_date;
        $this->cover_image = $activity->cover_image;
        $this->attachment_title = $activity->attachment_title;
    }

    public function saveActivity()
    {
        $datos = $this->validate();
        // Actualizar la imagen de portada si se proporciona una nueva
        if ($this->cover_image_new) {
            // Eliminar la imagen actual si existe
            if ($this->activity->cover_image && Storage::disk('public')->exists('activity/' . $this->activity->cover_image)) {
                Storage::disk('public')->delete('activity/' . $this->activity->cover_image);
            }

            // Guardar la nueva imagen
            $coverImage = $this->cover_image_new->store('activity', 'public');
            $datos['cover_image'] = basename($coverImage); // Solo guarda el nombre del archivo
        } else {
            $datos['cover_image'] = $this->activity->cover_image; // Mantener la imagen actual si no se actualiza
        }

        // Actualizar el PDF si se proporciona uno nuevo
        if ($this->new_attachment) {
            if ($this->activity->attachment && Storage::disk('public')->exists('activity/attachments/' . $this->activity->attachment)) {
                Storage::disk('public')->delete('activity/attachments/' . $this->activity->attachment);
            }

            $uniqueName = Str::uuid() . '.pdf';
            $this->new_attachment->storeAs('activity/attachments', $uniqueName, 'public');
            $datos['attachment'] = $uniqueName;
            $datos['attachment_title'] = $datos['attachment_title']; // Actualizar el título del nuevo PDF
        } else {
            $datos['attachment'] = $this->activity->attachment;
            $datos['attachment_title'] = $this->attachment_title ?? $this->activity->attachment_title; // Mantener el título actual si no se actualiza
        }

        // Actualizar la actividad
        $this->activity->update([
            'name' => $datos['name'],
            'description' => $datos['description'],
            'start_date' => $datos['start_date'],
            'end_date' => $datos['end_date'],
            'cover_image' => $datos['cover_image'],
            'attachment' => $datos['attachment'],
            'attachment_title' => $datos['attachment_title'] ?? $this->activity->attachment_title,
        ]);

        // Mensaje de éxito
        session()->flash('message', 'La actividad fue actualizada exitosamente.');
        return redirect()->route('activities.index');
    }

    public function render()
    {
        return view('livewire.backend.activity.edit-activity');
    }
}
