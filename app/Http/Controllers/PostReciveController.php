<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PetCategory;


class PostReciveController extends Controller
{
    

    public function postreceive(){
        // dd('donate');
        // $posts=Post::with('donate','petdonate')->get();
        // dd($donationlists);
        $posts=Post::all();
        return view('admin.pages.post.postreceive',compact('posts'));
    }
    public function postapprove($id){
        $post = Post::find($id)->update([
            'status'=>'approved'
        ]);
        return redirect()->back();
    }
}

    
   
    // public function postreceives(Request $request){
    //     //   dd($request->all());
    //     // dd(auth()->user());
    //     Post::create([
    //         'user_id'=>1,  //returns all info about user. only id is selected.
    //         'pet_id'=>$request->pet_id,
    //         'title'=>$request->title,
    //         'details'=>$request->details,
    //         'type'=>$request->type,
    //         'from_date'=>$request->from_date,
    //         'to_date'=>$request->to_date,
    //         'is_temporary'=>$request->is_temporary,
            

    //     ]);
        // return redirect()->route(route:'postreceive');
             
    



