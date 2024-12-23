<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SeccionType;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Services\PageService;
use App\Services\MenuService;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $pageService;
    protected $menuService;

    public function __construct(PageService $pageService, MenuService $menuService)
    {
        $this->pageService = $pageService;
        $this->menuService = $menuService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pages = Page::paginate(20); // 20 por página
        $currentPage = $request->input('page', 1);
        // Redirigir a la primera página si es necesario
        if ($currentPage != 1) {
            return view('backend.pages.index', compact('pages'));
        }

        return view('backend.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $botones = $this->menuService->getAll();
        return view('backend.pages.create', compact('botones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $datos = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:10|max:50',
            'seo_title' => 'required|min:3|max:50',
            'menu_id' => 'required|numeric|exists:menus,id'
        ], [
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'seo_title.required' => 'El título SEO es obligatorio.',
            'menu_id.exists' => 'El menú seleccionado no existe.',
            'menu_id.required' => 'Selecciona un menú'
        ]);
        $titulo = str_replace(['año', 'años'], ['anio', 'anios'], $datos['title']);
        $datos['slug'] = Str::slug($titulo);
        Page::create([
            'title' => $datos['title'],
            'description' => $datos['description'],
            'seo_title' => $datos['title'],
            'menu_id' => $datos['menu_id'],
            'slug' => $datos['slug'],
        ]);

        // Redirect to the pages index route
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
        // dd($page);

        $botones = $this->menuService->getAll();
        return view('backend.pages.edit', compact('botones', 'page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
        $datos = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:10|max:50',
            'seo_title' => 'required|min:3|max:50',
            'menu_id' => 'required|numeric|exists:menus,id'
        ], [
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'seo_title.required' => 'El título SEO es obligatorio.',
            'menu_id.exists' => 'El menú seleccionado no existe.',
            'menu_id.required' => 'Selecciona un menú'
        ]);

        $titulo = str_replace(['año', 'años'], ['anio', 'anios'], $datos['title']);
        $datos['slug'] = Str::slug($titulo);

        $page->update([
            'title' => $datos['title'],
            'description' => $datos['description'],
            'seo_title' => $datos['seo_title'],
            'menu_id' => $datos['menu_id'],
        ]);

        // Redirect to the pages index route
        return redirect()->route('pages.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
        // dd($page);
        $page->delete();
        return redirect()->route('pages.index',);
    }
}
