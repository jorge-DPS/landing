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



    public function updateCarrusel(Menu $menu, array $data): bool
    {
        return $this->repository->update($menu, $data);
    }

    public function deleteMenu(Carrusel $menu): bool
    {
        return $this->repository->delete($menu);
    }

}
