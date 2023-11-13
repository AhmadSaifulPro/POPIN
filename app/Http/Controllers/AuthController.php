<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Backtrace\Arguments\ReduceArgumentsAction;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function do_login( Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function login_wali(){
        return view('loginwali');
    }


    public function do_loginwali(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('wali')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('tabungansantri');
        }else{
            return redirect()->back();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
