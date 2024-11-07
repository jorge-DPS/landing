<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = $this->menuService->getAll();
        return view('backend.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (isset($data['order'])) {
            $existingMenu = $this->menuService->findByOrder($data['order']);
            if ($existingMenu) {
                return redirect(route('menu.create'))->withErrors(['errors' => 'La orden ya existe']);
            }
        }
        $this->menuService->create($data);
        return redirect()->route('menu.index')->with('success', 'Menu creado exitosamente.');

    }

    public function update(Request $request)
    {
        try {
            $this->menuService->update($request->all(), $request->id);
            $updatedView = $this->menuService->rendernewOrderMenu();
            return response()->json([
                'Codigo' => 0,
                'Data' => $updatedView,
                'Mensaje' => 'Menu actualizado correctamente',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Codigo' => 1,
                'Data' => null,
                'Mensaje' => $e->getMessage(),
            ]);
        }
    }
        

    public function destroy(Request $request)
    {
        try {
            $this->menuService->delete($request->id);
            $updatedView = $this->menuService->rendernewOrderMenu();
            return response()->json([
                'Codigo' => 0,
                'Data' => $updatedView,
                'Mensaje' => 'Menu eliminado correctamente',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Codigo' => 1,
                'Data' => null,
                'Mensaje' => $e->getMessage(),
            ]);
        }

    }

    public function updateOrder(Request $request)
    {
        try {

            $this->menuService->updateOrder($request->all());
            $updatedView = $this->menuService->rendernewOrderMenu();
            return response()->json([
                'Codigo' => 0,
                'Data' => $updatedView,
                'Mensaje' => 'Orden actualizado correctamente',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Codigo' => 1,
                'Data' => null,
                'Mensaje' => $e->getMessage(),
            ]);
        }
    }
}
