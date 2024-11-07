<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $data = $this->userService->getAllUsers();
        $countUser = count($data);

        return view('backend.user.index', compact('data', 'countUser'));

    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $this->userService->createUser($request->all());
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $this->userService->updateUser($id, $request->all());
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $userService->deleteUser($id);
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
