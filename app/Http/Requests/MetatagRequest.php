<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetatagRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:160',
            'keywords' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'robots' => 'required|string|max:255',
            'canonical' => 'required|string|max:255',
            'og_title' => 'required|string|max:255',
            'og_description' => 'required|string|max:160',
            'og_image' => 'nullable|image',
            'og_type' => 'required|string|max:255',
            'twitter_card' => 'required|string|max:255',
            'twitter_title' => 'required|string|max:255',
            'twitter_description' => 'required|string|max:160',
            'twitter_image' => 'nullable|image',
            'favicon' => 'nullable|image',
        ];
    }

    public function messages(): array
    {
        return [
            'page_name.required' => 'El nombre de la página es obligatorio.',
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'keywords.required' => 'Las palabras clave son obligatorias.',
            'robots.required' => 'El campo "robots" es obligatorio.',
            'canonical.required' => 'El URL canónico es obligatorio.',
            'og_title.required' => 'El título de Open Graph es obligatorio.',
            'og_description.required' => 'La descripción de Open Graph es obligatoria.',
            'og_image.image' => 'La imagen de Open Graph debe ser una imagen.',
            'og_type.required' => 'El tipo de Open Graph es obligatorio.',
            'twitter_card.required' => 'El tipo de tarjeta de Twitter es obligatorio.',
            'twitter_title.required' => 'El título de Twitter es obligatorio.',
            'twitter_description.required' => 'La descripción de Twitter es obligatoria.',
            'twitter_image.image' => 'La imagen de Twitter debe ser una imagen.',
            'favicon.image' => 'El favicon debe ser una imagen.',
        ];
    }
}
