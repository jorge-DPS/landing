<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarruselRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'small_title' => 'required|string|max:255',
            'big_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'mobile_background' => 'nullable|image',
            'desktop_background' => 'nullable|image',
            'tablet_background' => 'nullable|image',
        ];
    }

    public function messages(): array
    {
        return [
            'small_title.required' => 'El título pequeño es obligatorio.',
            'small_title.string' => 'El título pequeño debe ser una cadena de texto.',
            'small_title.max' => 'El título pequeño no puede exceder los 255 caracteres.',
            'big_title.required' => 'El título grande es obligatorio.',
            'big_title.string' => 'El título grande debe ser una cadena de texto.',
            'big_title.max' => 'El título grande no puede exceder los 255 caracteres.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'mobile_background.image' => 'El fondo móvil debe ser una imagen.',
            'desktop_background.image' => 'El fondo de escritorio debe ser una imagen.',
            'tablet_background.image' => 'El fondo de tableta debe ser una imagen.',
        ];
    }
}
