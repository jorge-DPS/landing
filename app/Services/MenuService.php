<?php

namespace App\Services;

use App\Models\Menu;
use App\Repositories\MenuRepository;

class MenuService
{
    protected $repository;

    public function __construct(MenuRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getCarrusel($id)
    {
        return $this->repository->getById($id);
    }

    public function create(array $data)
    {
        $menu = $this->repository->create($data);

        if (isset($data['page']) && is_array($data['page'])) {
            foreach ($data['page'] as $pageData) {
                if (!empty($pageData['title']) && !empty($pageData['description']) && !empty($pageData['seo_title'])) {
                    $menu->pages()->create([
                        'title' => $pageData['title'],
                        'description' => $pageData['description'],
                        'seo_title' => $pageData['seo_title'],
                        'menu_id' => $menu->id,
                    ]);
                }
            }
        }

        return $menu;
    }

    public function findByOrder($order)
    {
        return $this->repository->findByOrder($order);
    }



    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function updateOrder($data)
    {
        return $this->repository->updateOrder($data);
    }

    public function rendernewOrderMenu()
    {
        $menus = $this->getAll();
        $view = view('backend.menu.index', compact('menus'))->render();
        return $view;
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

}
