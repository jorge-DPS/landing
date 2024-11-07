<?php

namespace App\Services;

use App\Repositories\PageRepository;
use Illuminate\Support\Str;

class PageService
{
    protected $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getAllPages()
    {
        return $this->pageRepository->all();
    }

    public function getPageById($id)
    {
        return $this->pageRepository->find($id);
    }

    public function createPage(array $data)
    {
        $data['slug'] = Str::uuid();
        return $this->pageRepository->create($data);
    }

    public function updatePage($id, array $data)
    {
        return $this->pageRepository->update($id, $data);
    }

    public function deletePage($id)
    {
        return $this->pageRepository->delete($id);
    }
}
