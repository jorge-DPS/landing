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
        // dd($page);
        // $page = $this->pageService->getPageById($page->id);

        $sectionType = SeccionType::all();

        // return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));
        return view('backend.pagesConfigurations.index', [
            'page' => $page,
            'sectionType' => $sectionType,
            'sectionsAll' => $sectionsAll
        ]);
    }

    public function edit($id)
    {
        $section = Section::find($id);
        $sectionType = SeccionType::all();
        return view('backend.pagesConfigurations.edit', compact('section', 'sectionType'));
    }

    public function store(SectionRequest $request)
    {
        try {
            $section = Section::create($request->validated());
            return response()->json([
                'success' => true,
                'message' => 'Sección creada exitosamente',
                'section' => $section
            ]);
        } catch (Exceptions $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al crear la sección'
            ], 500);
        }
    }

    public function employees(Page $page, Section $section)
    {
        // dd($section);

        $sections = $page->sections; // si es hasMany
        return view('backend.pagesConfigurations.employees.index', [
            'page' => $page,
            'sections' => $sections,
        ]);
    }
}