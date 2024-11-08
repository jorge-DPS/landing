<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTableEmployees extends Component
{
    public $employees;
    /**
     * Create a new component instance.
     */
    public function __construct($employees)
    {
        //
        $this->employees = $employees;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table-employees');
    }
}