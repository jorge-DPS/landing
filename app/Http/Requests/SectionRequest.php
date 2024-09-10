<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'section_type_id' => 'required',
            'page_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "El título es requerido",
            'section_type_id.required' => "El tipo de sección es reaquerido",
            'page_id.required' => "La página es requerida",
        ];
    }
}
