<?php

namespace App\Livewire\Frontend\Pages;

use App\Models\Page;
use Livewire\Component;

class PageContent extends Component
{

    public $page;

    public function mount(Page $page){
        $this->page = $page;
    }

    public function render()
    {

        dd($this->page);
        return view('livewire.frontend.pages.page-content');
    }
}
