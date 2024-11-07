<?php

namespace App\Repositories;

use App\Models\Metatag;
use App\Interfaces\MetatagInterface;

class MetatagRepository implements MetatagInterface
{
    protected $model;

    public function __construct(Metatag $model)
    {
        $this->model = $model;
    }

    public function getFirst(): ?Metatag
    {
        return $this->model->first();
    }

    public function update(Metatag $metatag, array $data): bool
    {
        return $metatag->update($data);
    }
}
