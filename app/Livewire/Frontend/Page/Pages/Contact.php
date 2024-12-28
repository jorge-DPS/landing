<?php

namespace App\Livewire\Frontend\Page\Pages;

use App\Models\Company;
use Livewire\Component;

class Contact extends Component
{
    public $page;
    public function render()
    {
        // $this->page;
        $company = Company::first();
        // dd($company);
        return view('livewire.frontend.page.pages.contact', [
            'company' => $company,
        ]);
    }
}
