<?php
namespace App\Http\Controllers;

use App\Services\PageService;
use App\Models\Section;
use App\Models\SeccionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Exceptions;
use App\Http\Requests\SectionRequest;


class SectionController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index($id)
    {
        $sectionsAll = Section::where('page_id', $id)->get();
        $page = $this->pageService->getPageById($id);
        $sectionType = SeccionType::all();

        return view('backend.pagesConfigurations.index', compact('page', 'sectionType', 'sectionsAll'));
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
}