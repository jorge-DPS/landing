<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetatagRequest;
use App\Services\MetatagService;
use Illuminate\Http\JsonResponse;


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

    public function store(MetatagRequest $request): JsonResponse
    {
        $metatag = $this->service->createMetatag($request->validated());
        return response()->json($metatag, 201);
    }

    public function show(string $pageName): JsonResponse
    {
        $metatag = $this->service->getMetatagByPageName($pageName);
        return $metatag ? response()->json($metatag) : response()->json(['message' => 'Not Found'], 404);
    }

    public function update(MetatagRequest $request, string $pageName): JsonResponse
    {
        $metatag = $this->service->updateMetatag($pageName, $request->validated());
        return $metatag ? response()->json($metatag) : response()->json(['message' => 'Not Found'], 404);
    }

    public function destroy(string $pageName): JsonResponse
    {
        $deleted = $this->service->deleteMetatag($pageName);
        return $deleted ? response()->json(['message' => 'Deleted successfully']) : response()->json(['message' => 'Not Found'], 404);
    }
}
