<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function register() {
        return view('register');
    }

    public function registerAction(Request $request) {

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'password' => 'required',
       
        ]);
        if($validateData) {
            $validateData['password']=Hash::make($request->password);
            User::create($validateData);

            return redirect('login');
        }
        return redirect('register');
    }

}
