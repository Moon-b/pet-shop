<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Order;

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
        $post=Post::find($id);
        $user=User::find($post->reciver_id);
        return view('frontend.pages.myprofile.receiverinfo',compact('user','post'));

    }
}
