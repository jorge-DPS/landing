<?php

namespace App\Services;

use App\Repositories\CompanyRepository;

class CompanyService
{
    protected $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getFirstCompany()
    {
        return $this->repository->getFirst();
    }

}
