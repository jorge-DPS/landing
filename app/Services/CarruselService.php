<?php

namespace App\Services;

use App\Repositories\CarruselRepository;

class CarruselService
{
    protected $repository;

    public function __construct(CarruselRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCarrusel()
    {
        return $this->repository->getAll();
    }

}
