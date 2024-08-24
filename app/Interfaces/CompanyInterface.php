<?php

namespace App\Interfaces;

use App\Models\Company;

interface CompanyInterface
{
    public function getFirst(): ?Company;
    public function update(Company $company, array $data): bool;
}
