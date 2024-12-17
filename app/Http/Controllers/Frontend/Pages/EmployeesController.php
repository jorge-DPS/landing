<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employees(Page $page, Section $section)
    {
        
        return view('frontend.pages.employees', [
            'page' => $page,
            'section' => $section
        ]);
    }
}
