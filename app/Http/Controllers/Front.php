<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class Front extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'remember_token'=>$request->remember])){

            return redirect()->intended('checkout');

//            return "succ";
        }
        else{
            return redirect()->back();
        }

    }
    public function logout(){

       
            Auth::logout();

            return "successfull";
        
    }

    public function getregister(){

        return view('auth.register');
    }

    public function register(Request $request){

        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
        $user->save();
        return "successfull";
    }
    
    public function checkout(){
        return view('auth.checkout');
    }
}
