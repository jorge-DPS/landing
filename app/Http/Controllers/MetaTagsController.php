<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetatagRequest;
use App\Models\Metatag;
use App\Services\MetatagService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MetaTagsController extends Controller
{
    protected $service;

    public function __construct(MetatagService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $metatags = $this->service->getFirstMetatags();
        return view('backend.metatag.index', compact('metatags'));
    }

    public function update(MetatagRequest $request, Metatag $metatag): RedirectResponse
    {
        return $this->service->updateMetatag($request, $metatag);
    }
}
