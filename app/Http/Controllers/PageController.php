<?php

namespace App\Http\Controllers;

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
        //
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
