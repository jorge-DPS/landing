<?php

namespace App\Repositories;

use App\Models\People;
use App\Interfaces\PeopleInterface;

class PeopleRepository implements PeopleInterface
{
    protected $model;

    public function __construct(People $people)
    {
        $this->model = $people;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $people = $this->model->find($id);
        return $people ? $people->update($data) : null;
    }

    public function delete(int $id)
    {
        $people = $this->model->find($id);
        return $people ? $people->delete() : null;
    }
}