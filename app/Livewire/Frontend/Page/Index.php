<?php

namespace App\Livewire\Frontend\Page;

use App\Models\Page;
use Livewire\Component;

class Index extends Component
{
    public $page;

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $page = Page::with(['sections.employees', 'sections.cover', 'sections.images'])->find($this->page->id);

        // Obtener las secciones relacionadas con la página
        $sections = $page->sections;
        // dd($sections);
        
        return view('livewire.frontend.page.index',[
            'page' => $this->page,
            'sections' => $sections,
        ]);
    }
}
