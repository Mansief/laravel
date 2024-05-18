<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

use App\Models\User;


class AuthManager extends Controller
{
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('registration');
    }
    public function loginPost(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt( $credentials )){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with('error','Login details are not valid');
    }


    public function registrationPost(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required'
        ]);
        $newUser = User::create($data);
        if(!$newUser){
            return redirect(route('registration'))->with('error','Ragistration failed try again');
        }
        return redirect(route('login'))->with('success','Registration success. Login to get access');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

}
