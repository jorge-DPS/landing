<?php

namespace App\Services;

use App\Http\Requests\MetatagRequest;
use App\Models\Metatag;
use App\Repositories\MetatagRepository;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class MetatagService
{
    protected $repository;

    public function __construct(MetatagRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getFirstMetatags(): ?Metatag
    {
        try {
            return $this->repository->getFirst();
        } catch (Exception $e) {
            return $this->handleException($e, 'metatags.index');
        }
    }

    public function updateMetatag(MetatagRequest $request, Metatag $metatag): RedirectResponse
    {
        try {
            $validatedData = $request->validated();

            if ($request->hasFile('favicon')) {
                $faviconPath = saveStorage($request->file('favicon'), 'favicons');
                $validatedData['favicon'] = $faviconPath;
            }

            if ($request->hasFile('twitter_image')) {
                $twitterImagePath = saveStorage($request->file('twitter_image'), 'twitter_images');
                $validatedData['twitter_image'] = $twitterImagePath;
            }

            if ($request->hasFile('og_image')) {
                $ogImagePath = saveStorage($request->file('og_image'), 'og_images');
                $validatedData['og_image'] = $ogImagePath;
            }

            $this->repository->update($metatag, $validatedData);

            return redirect()->route('metatags.index')
                ->with('success', 'Meta tag actualizado exitosamente');
        } catch (Exception $e) {
            return $this->handleException($e, 'metatags.index');
        }
    }


    protected function handleException(Exception $e, string $redirectRoute): RedirectResponse
    {
        Log::error($e->getMessage());
        return redirect()->route($redirectRoute)
            ->with('error', 'Se produjo un error: ' . $e->getMessage());
    }
}
