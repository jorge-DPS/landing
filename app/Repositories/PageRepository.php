<?php

namespace App\Repositories;

use App\Models\Page;
use App\Interfaces\PageInterface;

class PageRepository implements PageInterface
{
    public function all()
    {
        return Page::all();
    }

    public function find($id)
    {
        return Page::findOrFail($id);
    }

    public function create(array $data)
    {
        return Page::create($data);
    }

    public function update($id, array $data)
    {
        $page = Page::findOrFail($id);
        $page->update($data);
        return $page;
    }

    public function delete($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return $page;
    }
}
