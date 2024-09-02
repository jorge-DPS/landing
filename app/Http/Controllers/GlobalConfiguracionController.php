<?php

namespace App\Http\Controllers;

use App\Models\GlobalConfiguration;
use Illuminate\Http\Request;

class GlobalConfiguracionController extends Controller
{
    public function updateTimeCarrusel(Request $request)
    {
        try {
            $globalConfig = GlobalConfiguration::first();
            $globalConfig->carrusel_time = $request->input('seconds');
            $globalConfig->save();

            return response()->json([
                'Codigo' => 0,
                'Data' => null,
                'Mensaje' => 'Tiempo actualizado correctamente.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Codigo' => 1,
                'Data' => null,
                'Mensaje' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(GlobalConfiguration $globalConfiguration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalConfiguration $globalConfiguration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GlobalConfiguration $globalConfiguration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GlobalConfiguration $globalConfiguration)
    {
        //
    }
}
