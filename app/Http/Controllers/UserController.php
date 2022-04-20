<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

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
                // dd($users);
                'user_image'=>$filename,
                'name'=>$request->name,
                
                'user_address'=>$request->user_address,
                'user_country'=>$request->user_country,
                'user_city'=>$request->user_city,
                'user_phone'=>$request->user_phone,
                'email'=>$request->email,
                
                
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
    public function report(){
    
        
         return view('admin.pages.postreport.report');
    } 
    
    public function reportResult(Request $request){
        // dd($request->all());
        $toDate = Carbon::parse($request->to_date)->addDay();
        $post_report = Post::whereBetween('created_at',[$request->from_date,$toDate])->get();
        // dd($post_report);
        return view('admin.pages.postreport.postreport',compact('post_report'));

    }
    public function orderreport(){
    
        
        return view('admin.pages.orderreport.report');
   } 
   public function orderreportResult(Request $request){
    // dd($request->all());
    $toDate = Carbon::parse($request->to_date)->addDay();
    $order_report = Order ::whereBetween('created_at',[$request->from_date,$toDate])->get();
    // dd($post_report);
    return view('admin.pages.orderreport.orderreport',compact('order_report'));

}
}
