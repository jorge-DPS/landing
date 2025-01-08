<?php

namespace App\Livewire\Backend\Activity;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditActivity extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $start_date;
    public $end_date;
    public $cover_image;
    public $cover_image_new;

    public $activity;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'cover_image_new' => 'nullable|image|max:2048',
    ];

    public function mount($activity)
    {
        $this->name = $activity->name;
        $this->description = $activity->description;
        $this->start_date = $activity->start_date;
        $this->end_date = $activity->end_date;
        $this->cover_image = $activity->cover_image;
    }

    public function saveActivity()
    {
        $datos = $this->validate();
        // Si hay una nueva imagen
        if ($this->cover_image_new) {
            if ($this->activity->cover_image && Storage::disk('public')->exists('activity/' . $this->activity->cover_image)) {
                Storage::disk('public')->delete('activity/' . $this->activity->cover_image);
            }
            $imagen = $this->cover_image_new->store('activity', 'public');
            $datos['image'] = basename($imagen);
        }

        // Actualizar la actividad
        $this->activity->update([
            'name' => $datos['name'],
            'description' => $datos['description'],
            'start_date' => $datos['start_date'],
            'end_date' => $datos['end_date'],
            'cover_image' => $datos['image'] ?? null,
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
