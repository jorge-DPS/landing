<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetatagRequest;
use App\Services\MetatagService;
use Illuminate\Http\RedirectResponse;
use App\Models\Metatag;


class MetaTagsController extends Controller
{
    protected $service;

    public function __construct(MetatagService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $metatags = $this->service->getFirstMetatags();
        return view('backend.metatag.index', compact('metatags'));
    }

    public function update(MetatagRequest $request, Metatag $metatag): RedirectResponse
    {
        try {
            $validatedData = $request->validated();
            $metatag->update($validatedData);
            return redirect()->route('metatags.index')
                ->with('success', 'Meta tag actualizado exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('metatags.index')
                ->with('error', 'An error occurred while updating the meta tag: ' . $e->getMessage());
        }
    }

}
