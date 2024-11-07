<?php

namespace App\Interfaces;

use App\Models\Carrusel;

interface CarruselInterface
{
    public function getAll(): array;
    public function getById(int $id): ?Carrusel;
    public function create(array $data): Carrusel;
    public function update(Carrusel $carrusel, array $data): bool;
    public function delete(Carrusel $carrusel): bool;
}
