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
                $menu->pages()->create([
                    'title' => $pageData['title'],
                    'description' => $pageData['description'],
                    'seo_title' => $pageData['seo_title'],
                    'menu_id' => $menu->id,
                ]);
            }
        }

        return $menu;
    }



    public function updateCarrusel(Menu $menu, array $data): bool
    {
        return $this->repository->update($menu, $data);
    }

    public function deleteMenu(Carrusel $menu): bool
    {
        return $this->repository->delete($menu);
    }

}
