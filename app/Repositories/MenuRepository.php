<?php

namespace App\Repositories;

use App\Models\Menu;

class MenuRepository
{
    protected $model;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->with('pages')->get();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data): Menu
    {
        return $this->model->create($data);
    }

    public function update(Menu $menu, array $data): bool
    {
        return $menu->update($data);
    }

    public function delete(Menu $menu): bool
    {
        return $menu->delete();
    }

}
