<?php

namespace App\Http\Controllers\Backend\SectionPortada;

use App\Http\Controllers\Controller;
use App\Models\Backend\Pages\Cover;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class PortadaController extends Controller
{
    //
    
    public function index(Page $page, Section $section)
    {
        
        // Obtener la portada asociada a la sección
        $cover = Cover::where('section_id', $section->id)->first();
        return view('backend.pagesConfigurations.portada.index', [
            'page' => $page,
            'section' => $section,
            'cover' => $cover
        ]);
    }

    public function create(Page $page, Section $section)
    {
        
        // return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));
        return view('backend.pagesConfigurations.portada.create', [
            'page' => $page,
            'section' => $section,
        ]);
    }

    public function edit(Page $page, Section $section, Cover $cover)
    {
        
        // return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));
        return view('backend.pagesConfigurations.portada.edit', [
            'page' => $page,
            'section' => $section,
            'cover' => $cover
        ]);
    }
}
