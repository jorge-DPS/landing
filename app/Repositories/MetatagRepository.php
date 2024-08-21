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

    public function getAll()
    {
        return $this->model->all();
    }

    public function findByPageName(string $pageName)
    {
        return $this->model->where('page_name', $pageName)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Metatag $metatag, array $data)
    {
        $metatag->update($data);
        return $metatag;
    }

    public function delete(Metatag $metatag)
    {
        return $metatag->delete();
    }
}
