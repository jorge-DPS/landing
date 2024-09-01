<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;
use App\Models\Section;

class SectionController extends Controller
{

    public function store(SectionRequest $request)
    {
        try {
            Section::create($request->validated());
            return response()->json([
                'success' => true,
                'message' => 'Sección creada exitosamente'
            ]);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al intentar crear la sección. Por favor, inténtalo de nuevo más tarde.'
            ]);
        }
    }

}
