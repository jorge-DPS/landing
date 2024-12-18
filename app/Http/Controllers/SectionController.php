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

        $sectionType = SeccionType::all();

        // return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));
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

    // public function store(SectionRequest $request)
    // {
    //     try {
    //         $section = Section::create($request->validated());
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Sección creada exitosamente',
    //             'section' => $section
    //         ]);
    //     } catch (Exceptions $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Error al crear la sección'
    //         ], 500);
    //     }
    // }

    // public function employees(Page $page, Section $section)
    // {
    //     // Cargar empleados de la sección específica
    //     $employees = $section->employees;

    //     return view('backend.pagesConfigurations.employees.index', [
    //         'section' => $section,
    //         'employees' => $employees,
    //     ]);
    // }
}