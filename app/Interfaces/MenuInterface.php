<?php

namespace App\Interfaces;

use App\Models\Menu;

interface MenuInterface
{
    public function getAll(): array;
    public function getById(int $id): ?Menu;
    public function create(array $data): Menu;
    public function update(Menu $menu, array $data): bool;
    public function delete(Menu $menu): bool;
}
