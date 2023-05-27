<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register',[
             "title" => "Register",
             "active" => "register"
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'gender' => 'required',
            'age' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'gender' => $request->gender
      ]);

        Alert::success('Success', 'Your account has been registered');
        return redirect('/login');
    }
}
