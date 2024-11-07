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

    public function getFirst(): ?Company
    {
        return $this->model->first();
    }

    public function update(Company $metatag, array $data): bool
    {
        return $metatag->update($data);
    }

}
