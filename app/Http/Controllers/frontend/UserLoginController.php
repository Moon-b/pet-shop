<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function userlogin()
    {
        return view('frontend.pages.userlogin.userlogin');
    }
    public function douserlogin (Request $request){
        // dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credentials=$request->except('_token');
        // dd(auth()->attempt($credentials));
        if(auth()->attempt($credentials))
        {
            return redirect()->route('home');
        }
        return redirect()->back()->with('message','Invalid Credentials.');


    
    }
public function douserlogout()
    {
        session()->forget('cart');
        auth()->logout();
        return redirect()->route('home')->with('message','Logout Successful');
    }
}
