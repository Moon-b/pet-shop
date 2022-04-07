<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    // for view
        public function user(){
            $users=User::all();
            return view('admin.pages.user.user',compact('users'));
    }
    // for form
    public function userform(){
    
        return view('admin.pages.user.userrform');
    }
    //for post
    
    
    // for edit
    public function useredit($id){
        // $categories = Category::all(); 
        $users = User::find($id);
        if ($users) {
        return view('admin.pages.user.useredit',compact('users'));
        } else {
            return redirect()->back();
        }
    
    }
    // for update
    
    public function userupdate(Request $request,$id){
        // dd($request->all());
        $users = user::find($id);
        
        $filename=$users->user_image;
        if ($request->hasFile('user_image')) {
            $file=$request->file('user_image');
            $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file ->storeAs('/uploads',$filename);
        }
        if ($users) {
            $users->update([
                'user_image'=>$request->user_image,
                'user_first_name'=>$request->user_first_name,
                'user_last_name'=>$request->user_last_name,
                'user_address'=>$request->user_address,
                'user_country'=>$request->user_country,
                'user_city'=>$request->user_city,
                'user_phone'=>$request->user_phone,
                'user_email'=>$request->user_email,
                
                
            ]);
            return redirect()->route(route:'user');
        } else {
            return redirect()->back();
        }
    
    
    }
    // for delete
    public function userdelete($id){
        $users =user::find($id);
        if ($users) {
            $users->delete();
            return redirect()->back();
    
        } else {
        return redirect()->back();
        }
    
    }
}
