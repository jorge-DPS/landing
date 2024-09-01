<?php

namespace App\Repositories;

use App\Models\Section;
use App\Interfaces\SectionPublicInterface;

class SectionPublicRepository implements SectionPublicInterface
{
    private $model;
    public function __construct(Section $section)
    {
        $this->model= $section;
    }

    public function getSectionsByPage(int $id)
    {
        return $this->model->where('page_id', $id)->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

}