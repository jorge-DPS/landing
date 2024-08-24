<?php

namespace App\Repositories;

use App\Models\Carrusel;

class CarruselRepository
{
    protected $model;

    public function __construct(Carrusel $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

}
