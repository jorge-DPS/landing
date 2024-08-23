<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\CompanyService;
use App\Http\Requests\CompanyRequest;
use App\models\Company;

class CompanyController extends Controller
{
    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->getFirstCompany();
        return view('backend.company.index', compact('companies'));
    }

    public function update(CompanyRequest $request, Company $product): RedirectResponse
    {

        $product->update($request->validated());

        return redirect()->route('company.index')
            ->with('success','Product updated successfully');
    }

}
