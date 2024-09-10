<?php

namespace App\Http\Controllers;

use App\Models\CoverSection;
use Illuminate\Http\Request;

class CoverSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.coverSection.index');
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
    public function show(CoverSection $coverSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoverSection $coverSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoverSection $coverSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoverSection $coverSection)
    {
        //
    }
}
