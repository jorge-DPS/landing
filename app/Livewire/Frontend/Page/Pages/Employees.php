<?php

namespace App\Livewire\Frontend\Page\Pages;

use Livewire\Component;

class Employees extends Component
{
    public $page;
    public $section;

    public function render()
    {
        $employees = $this->section->employees;
        return view('livewire.frontend.page.pages.employees', [
            'employees' => $employees,
            'section' => $this->section,
        ]);
    }
}
