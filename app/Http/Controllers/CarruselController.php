<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\CarruselService;
use App\models\Carrusel;
use App\Http\Requests\CarruselRequest;

class CarruselController extends Controller
{
    protected $service;

    public function __construct(CarruselService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrusel = $this->service->getAllCarrusel();
        $countCarrusel = count($carrusel);
        return view('backend.carrusel.index', compact('carrusel', 'countCarrusel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carrusel.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        $data = ($request->all());

        $this->service->createCarrusel($data);

        return redirect()->route('carrusel.index')->with('success', 'Carrusel creado exitosamente.');
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
        $carrusel = $this->service->getCarrusel($id);
        //dd($carrusel);
        return view('backend.carrusel.edit', compact('carrusel'));
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
