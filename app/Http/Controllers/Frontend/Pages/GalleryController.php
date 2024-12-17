<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    //
    public function gallery(Page $page, Section $section)
    {
        
        return view('frontend.pages.gallery', [
            'page' => $page,
            'section' => $section
        ]);
    }
}
