<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    protected $model;

    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    public function getFirst()
    {
        return $this->model->first();
    }

}
