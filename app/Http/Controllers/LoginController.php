<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{

    public function index(){
        return view('login.index' , [
            'title' => 'Login',
        ]);
    }

    public function login(Request $request){

        $creds = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($creds)){ // harusnya pake role yang buat middleware
            $user = Auth::user();
            if($user->role == 'admin'){
                $request->session()->regenerate();
                return redirect('/admin');
            }else{
                $request->session()->regenerate();
                return redirect('/dashboard');
            }
        }

        Alert::error('Login Failed!', 'Invalid Credentials');
        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
