<?php

namespace App\Http\Controllers;

use App\Models\SeccionType;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Services\PageService;
use App\Services\MenuService;
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
    public function index()
    {
        $pages = $this->pageService->getAllPages();
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
        $menu = $this->menuService->getCarrusel($request->button_id);

        if (is_object($menu) && isset($menu->id)) {
            $menu_id = $menu->id;
        } else {
            return redirect()->back()->withErrors(['menu_id' => 'Menu not found.']);
        }

        if ($request->has('page') && is_array($request->page)) {
            foreach ($request->page as $pageData) {
                $data = [
                    'title' => $pageData['title'] ?? null,
                    'description' => $pageData['description'] ?? null,
                    'seo_title' => $pageData['seo_title'] ?? null,
                    'menu_id' => $menu_id,
                ];

                if (empty($data['title']) || empty($data['description']) || empty($data['seo_title'])) {
                    return redirect()->back()->withErrors(['message' => 'Title, Description, and SEO Title are required for all pages.']);
                }

                $this->pageService->createPage($data);
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'No page data provided.']);
        }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
