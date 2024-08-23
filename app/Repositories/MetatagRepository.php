<?php

namespace App\Repositories;

use App\Models\Metatag;

class MetatagRepository
{
    protected $model;

    public function __construct(Metatag $model)
    {
        $this->model = $model;
    }

    public function getFirst()
    {
        return $this->model->first();
    }
    
}
