<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'avatar' => 'image',
        ]);

        $input = $request->all();

        if ($request->hasFile('avatar')) {
            $input['avatar'] = saveStorage($request->file('avatar'), 'avatars');
        } else {
            unset($input['avatar']);
        }

        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }

        auth()->user()->update($input);

        return back()->with('success', 'Profile updated successfully.');
    }

}
