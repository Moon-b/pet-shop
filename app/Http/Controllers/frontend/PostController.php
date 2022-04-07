<?php

namespace App\Http\Controllers\frontend;
use App\Models\Pet;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(){
        // dd('donate');
        // $posts=Post::with('donate','petdonate')->get();
        // dd($donationlists);
        $posts=Post::all();
        return view('frontend.pages.post.post',compact('posts'));
    }
    public function postcreate(){
        // $customers = Customer::all();
        $pets = Pet :: all();
        
        return view('frontend.pages.post.postform',compact('pets'));
    }
    public function postform (Request $request){
        //  dd($request->all());   
        // dd(auth()->user());
        $is_temp = 'no';
        if ($request->has('is_temporary')) {
            $is_temp = $request->is_temporary;
        }
      $a=  Post::create([
            'user_id'=>1,  //returns all info about user. only id is selected.
            'pet_id'=>$request->pet_id,
            'title'=>$request->title,
            'details'=>$request->details,
            'type'=>$request->type,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
            'is_temporary'=>$is_temp,
            

        ]);
       // dd($a);
        return redirect()->route(route:'home');
             
    }
}
