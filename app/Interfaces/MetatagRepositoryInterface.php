<?php

namespace App\Interfaces;

use App\Models\Metatag;

interface MetatagRepositoryInterface
{
    public function getFirst(): ?Metatag;
    public function update(Metatag $metatag, array $data): bool;
}
