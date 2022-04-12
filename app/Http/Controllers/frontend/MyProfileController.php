<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
}
