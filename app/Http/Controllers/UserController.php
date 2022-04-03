<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.pages.login.login');
    }
    public function dologin(Request $request){
        // dd($request->all());
$request->validate([
    'email'=>'required|email',
    'password'=>'required',
]);
    $credentials=$request->except('_token');
    // dd(auth()->attempt($credentials));
    if(auth()->attempt($credentials))
    {
        return redirect()->route('dashboard');
    }
    return redirect()->back()->with('message','Invalid Credentials.');


    
}
public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login')->with('message','Logout Successful');
    }
}
