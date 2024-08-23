<?php

namespace App\Services;

use App\Repositories\MetatagRepository;

class MetatagService
{
    protected $repository;

    public function __construct(MetatagRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getFirstMetatags()
    {
        return $this->repository->getFirst();
    }
}
