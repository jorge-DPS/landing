<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Services\CompanyService;
use App\Http\Requests\CompanyRequest;
use App\models\Company;
use Illuminate\View\View;

class CompanyController extends Controller
{
    private $service;

    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $companies = $this->service->getFirstCompanys();
        return view('backend.company.index', compact('companies'));
    }

    public function update(CompanyRequest $request, Company $company): RedirectResponse
    {
        return $this->service->updateCompany($request, $company);
    }
}
