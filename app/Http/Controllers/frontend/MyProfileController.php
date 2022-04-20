<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\PetProduct;
use App\Models\User;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    
    public function myprofile(){
        // dd('donate');
        // $posts=Post::with('donate','petdonate')->get();
        // dd($donationlists);
        $users = auth()->user();
        // dd($users);
        return view('frontend.pages.myprofile.myprofile',compact('users'));
    }
    public function mypost(){   
        $posts = Post::where('user_id',auth()->user()->id)->get();
        return view('frontend.pages.myprofile.mypost',compact('posts'));
    }
    public function myorder(){   
        $order = Order::where('user_id',auth()->user()->id)->get();
        return view('frontend.pages.myprofile.myorder',compact('order'));
    }
    public function receiverinfo($id){
        // dd($id);
        $post=Post::find($id);
        $user=User::find($post->recever_id);
        return view('frontend.pages.myprofile.receiverinfo',compact('user','post'));

    }
    // public function myprofileedit (){
    
    //     return view('frontend.pages.myprofile.myprofileedit');
    //   }
      public function myprofileedit($id){
        // $users =PetCategory::all(); 
        $users = auth()->user();
        $users = User::find($id);
        if ($users) {
        return view('frontend.pages.myprofile.myprofileedit',compact('users'));
        } else {
            return redirect()->back();
        }
        
    }
    public function myprofileupdate(Request $request,$id){
        $users = auth()->user();
        $users=User::find($id);
        $filename=$users->user_image;
        if ($request->hasFile('user_image')) {
            $file=$request->file('user_image');
            $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file ->storeAs('/uploads',$filename);
        }
    if($users){
    $users->update([
        
        'name'=>$request->name,
        'user_image'=>$filename,
        'user_address'=>$request->user_address,
        'user_country'=>$request->user_country,
        'user_city'=>$request->user_city,
        'user_phone'=>$request->user_phone,
       
    ]);
     return redirect()->route(route:'myprofile');
    }
    else
    {
        return redirect()->back();
    }
    
    }
    public function invoice($id)
    {   $order = auth()->user();
        $order=Order::with('details')->find($id);
// dd($order);
        return view('frontend.pages.order.invoicedetails',compact('order'));
    }

    public function cancelOrder($id){
        $order = Order::find($id);
        if ($order) {
            $order_details = OrderDetails::where('order_id',$order->id)->get();
            foreach ($order_details as $key => $value) {
                $PetProduct=PetProduct::find($value->item_id);
                if ($PetProduct) {
                    $PetProduct->update([
                        'available_quantity'=> $PetProduct->available_quantity + $value->quantity
                    ]);
                }
            }
            $order ->update([
                'order_status'=>'cancel'
            ]);
            return redirect()->back();
        }
    }
        public function mypostcancel($id){
            // dd($id);
            $post = Post::find($id)->update([
                'order_status'=>'cancel'
            ]);
            return redirect()->back();
        }
    }

