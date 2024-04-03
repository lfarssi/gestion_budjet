<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function show(){
        return view('login.show');
    }
    public function login(Request $request){
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $credentials=['email'=>$email, 'password'=>$password];
        // dd($credentials);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route("partials.index")->with('bg-green-300','vous etes connecté Mr '.$name);
        }else{
            return back()->withErrors([
                'email'=>'email ou mot de pass incorrect',
            ])->onlyInput('email');
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login.show');
    }
}
