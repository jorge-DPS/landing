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
        // Reemplazar "año" y "años" por "anio" y "anios" respectivamente
        $titulo = str_replace(['año', 'años'], ['anio', 'anios'], $data['title']);
        $data['slug'] = Str::slug($titulo);
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
