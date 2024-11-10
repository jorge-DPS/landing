<?php

namespace App\Services;namespace App\Services;



use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\Repositories\SectionPublicRepository;
class SectionPublicService
{
    private $validate;
    private $repository;

    public function __construct(
        SectionRequest $validate,
        SectionPublicRepository $repository
    )
    {
        $this->validate = $validate;
        $this->repository = $repository;
    }

    public function getSectionsByPage(int $id)
    {
        return $this->repository->getSectionsByPage($id);
    }
    public function create(array $data)
    {
        $validate = $this->validate->validate($data);
        return $this->repository->create($validate);
    }

}
