<?php

namespace App\Services;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class CompanyService
{
    protected $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getFirstCompanys(): ?Company
    {
        try {
            return $this->repository->getFirst();
        } catch (Exception $e) {
            return $this->handleException($e, 'metatags.index');
        }
    }

    public function updateCompany(CompanyRequest $request, Company $company): RedirectResponse
    {
        try {
            $validatedData = $request->validated();

            if ($request->hasFile('big_logo')) {
                $logoNewBig = saveStorage($request->file('big_logo'), 'big_logos');
                $validatedData['big_logo'] = $logoNewBig;
            }

            if ($request->hasFile('small_logo')) {
                $logoNewSmall = saveStorage($request->file('small_logo'), 'small_logos');
                $validatedData['small_logo'] = $logoNewSmall;
            }

            if ($request->hasFile('dark_logo')) {
                $logoNewDark = saveStorage($request->file('dark_logo'), 'dark_logos');
                $validatedData['dark_logo'] = $logoNewDark;
            }

            if ($request->hasFile('light_logo')) {
                $logoNewLight = saveStorage($request->file('light_logo'), 'loght_logos');
                $validatedData['light_logo'] = $logoNewLight;
            }

            $this->repository->update($company, $validatedData);

            return redirect()->route('company.index')
                ->with('success', 'Datos de empresa actualizado exitosamente');
        } catch (Exception $e) {
            return $this->handleException($e, 'company.index');
        }
    }


    protected function handleException(Exception $e, string $redirectRoute): RedirectResponse
    {
        Log::error($e->getMessage());
        return redirect()->route($redirectRoute)
            ->with('error', 'Se produjo un error: ' . $e->getMessage());
    }

}
