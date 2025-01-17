<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Models\Backend\Pages\Activity;
use Illuminate\Http\Request;

class PublicActivityController extends Controller
{
    //}

    public function show()
    {
        $activities = Activity::all();
        // dd($activities);
        return view('frontend.pages.activity', [
            'activities' => $activities
        ]);
    }
}
