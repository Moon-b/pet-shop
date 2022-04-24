<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        
        return view('frontend.pages.regestration.signup');
    }
    public function userpost (Request $request){
        // dd($request->all());
        $request->validate([
            'user_image'=>'required',
                'name'=>'required',
                // 'customer_last_name'=>$request->customer_last_name,
                'user_address'=>'required',
                'user_country'=>'required',
                'user_city'=>'required',
                'user_phone'=>'required',
                'email'=>'required',
                'password'=>'required',
           
        
    
        ]);
        $filename = null;
        if ($request->hasFile('user_image')) {
            $file=$request->file('user_image');
            $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file ->storeAs('/uploads',$filename);
        }
        User::create([
            'user_image'=>$filename,
                'name'=>$request->name,
                // 'customer_last_name'=>$request->customer_last_name,
                'user_address'=>$request->user_address,
                'user_country'=>$request->user_country,
                'user_city'=>$request->user_city,
                'user_phone'=>$request->user_phone,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
    
        ]);
        return redirect()->route('home');
    }
}

    


