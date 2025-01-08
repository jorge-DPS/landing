<?php

namespace App\Http\Controllers\Backend\Activity;

use App\Http\Controllers\Controller;
use App\Models\Backend\Pages\Activity;
use Illuminate\Http\Request;

use function Termwind\render;

class ActivityController extends Controller
{
    //

    public function index(){
        return view('backend.activity.index');
    }

    public function create()
    {
        return view('backend.activity.create');
    }

    public function edit(Activity $activity)
    {
        // dd($activity);
        return view('backend.activity.edit', [
            'activity' => $activity,
        ]);
    }
}
