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
        return $this->model->with('pages')->orderBy('order')->get();
    }


    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data): Menu
    {
        return $this->model->create($data);
    }

    public function update($data, $id)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function findByOrder($order)
    {
        return $this->model->where('order', $order)->first();
    }

    public function updateOrder(array $data)
    {
        foreach ($data as $item) {
            $this->model->where('id', $item['id'])
                ->update(['order' => $item['order']]);
        }
    }
}
