<?php

namespace App\Livewire\Frontend\Pages;

use App\Models\Page;
use Livewire\Component;

class PageContent extends Component
{

    public $page;

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {

        $page = Page::with('sections')->find($this->page->id);  // Asumiendo que $pageId es el ID de la página que buscas

        // Acceder a las secciones públicas
        // foreach ($page->sectionsPublic as $section) {
        foreach ($page->sections as $section) {
            // Aquí puedes usar $section, que contiene los datos de cada sección pública
            // dd($section);

            // echo $section->nombre;  // Reemplaza 'nombre' con el campo adecuado
        }

        // foreach ($page->sections as $section) {
        //     // Aquí puedes usar $section, que contiene los datos de cada sección pública
        //     // dd($section);

        //     // echo $section->nombre;  // Reemplaza 'nombre' con el campo adecuado
        // }

        // dd($this->page);
        return view('livewire.frontend.pages.page-content');
    }
}
