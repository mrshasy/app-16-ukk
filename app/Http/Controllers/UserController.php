<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        User::create($user);
        return redirect('/user');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        $data = $user;
        $data->name = $request['name'];
        $data->email = $request['email'];
        if ($request->has('password') && $request['password'] != '')
            $data->password = $request->has('password') && $request['password'] != '';
        $data->telepon = $request['telepon'];
        $data->alamat = $request['alamat'];
        $data->role = $request['role'];
        $data->save();

        return redirect('/user');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user');
    }
}