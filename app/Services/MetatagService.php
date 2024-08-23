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

    public function getMetatagByPageName(string $pageName)
    {
        return $this->repository->findByPageName($pageName);
    }

    public function createMetatag(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateMetatag(string $pageName, array $data)
    {
        $metatag = $this->repository->findByPageName($pageName);
        if ($metatag) {
            return $this->repository->update($metatag, $data);
        }
        return null;
    }

    public function deleteMetatag(string $pageName)
    {
        $metatag = $this->repository->findByPageName($pageName);
        if ($metatag) {
            return $this->repository->delete($metatag);
        }
        return null;
    }
}
