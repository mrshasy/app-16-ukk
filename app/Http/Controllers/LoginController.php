<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginAction(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd(request()->all());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect('/admin');
            } elseif (auth()->user()->role == 'petugas') {
                return redirect('/petugas');
            } elseif (auth()->user()->role == 'peminjam') {
                return redirect('/peminjam');
            }
 
            return redirect()->intended('welcome');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}