<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //
    public function index(Page $page, Section $section)
    {
        // Puedes agregar lógica aquí, como obtener imágenes relacionadas con la sección.
        $images = $section->images; // Suponiendo que tienes una relación 'images' en el modelo Section.

        return view('backend.pagesConfigurations.image.index', compact('page', 'section', 'images'));
    }

    public function create(Page $page,  Section $section){
        return view('backend.pagesConfigurations.image.create', compact('page', 'section'));
    }
}
