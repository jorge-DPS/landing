<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'mobile' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'big_logo' => 'nullable|image',
            'small_logo' => 'nullable|image',
            'dark_logo' => 'nullable|image',
            'light_logo' => 'nullable|image',
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.required' => 'El nombre de la empresa es obligatorio.',
            'company_name.string' => 'El nombre de la empresa debe ser una cadena de texto.',
            'company_name.max' => 'El nombre de la empresa no puede exceder los 255 caracteres.',

            'owner_name.required' => 'El nombre del propietario es obligatorio.',
            'owner_name.string' => 'El nombre del propietario debe ser una cadena de texto.',
            'owner_name.max' => 'El nombre del propietario no puede exceder los 255 caracteres.',

            'description.string' => 'La descripción debe ser una cadena de texto.',

            'phone.string' => 'El teléfono debe ser una cadena de texto.',
            'phone.max' => 'El teléfono no puede exceder los 20 caracteres.',

            'mobile.string' => 'El mobile debe ser una cadena de texto.',
            'mobile.max' => 'El mobile no puede exceder los 20 caracteres.',

            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.max' => 'La dirección no puede exceder los 255 caracteres.',

            'big_logo.image' => 'El logo grande debe ser una imagen.',

            'small_logo.image' => 'El logo pequeño debe ser una imagen.',

            'dark_logo.image' => 'El logo oscuro debe ser una imagen.',

            'light_logo.image' => 'El logo claro debe ser una imagen.',


        ];
    }
}
