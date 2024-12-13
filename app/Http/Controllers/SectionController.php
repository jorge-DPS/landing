<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use App\Models\SeccionType;
use Illuminate\Http\Request;
use App\Services\PageService;
use App\Http\Requests\SectionRequest;
use Illuminate\Support\Facades\Exceptions;


class SectionController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index(Page $page)
    {
        $sectionsAll = Section::where('page_id', $page->id)->get();
        // dd($sectionsAll);

        $sectionType = SeccionType::all();
        // return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));

        // $cover = Cover::where('section_id', $this->section->id)->first();
        return view('backend.pagesConfigurations.index', [
            'page' => $page,
            'sectionType' => $sectionType,
            'sectionsAll' => $sectionsAll
        ]);
    }

    // public function edit($id, Page $page, Section $section)
    // {
    //     // dd('desde section');
    //     $section = Section::find($id);
    //     $sectionType = SeccionType::all();
    //     return view('backend.pagesConfigurations.edit', compact('section', 'page', 'sectionType'));
    // }

    public function store(Page $page, Request $request)
    {
        // dd($request);
        // Validar los datos enviados
        $datos = $request->validate([
            'title' => 'required|string|max:255',
            'section_type_id' => 'required|exists:section_types,id', // Asegúrate de que 'section_types' sea el nombre correcto de la tabla
        ]);

        // Crear una nueva sección con los datos validados
        Section::create([
            'title' => $datos['title'],
            'section_type_id' => $datos['section_type_id'],
            'page_id' => $page->id,  // Asumiendo que 'page_id' viene del modelo de página
        ]);

        // Redirigir después de guardar
        return redirect()->route('pages.configuration.index', [
            'page' => $page
            ]
        );
    }

    // public function employees(Page $page, Section $section)
    // {
    //     // Cargar empleados de la sección específica
    //     $employees = $section->employees;

    //     return view('backend.pagesConfigurations.employees.index', [
    //         'section' => $section,
    //         'employees' => $employees,
    //     ]);
    // }

    public function destroy(Page $page, Section $section){
        // El Laravel se encargará de buscar la sección con ese ID
        // dd($page);
        $section->delete();
        session()->flash('message', 'Sección eliminada correctamente.');
        return redirect()->route('pages.configuration.index', [
            'page' => $page
        ]);
    }
}
