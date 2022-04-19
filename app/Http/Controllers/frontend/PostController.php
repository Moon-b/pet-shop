<?php

namespace App\Http\Controllers\frontend;
use App\Models\PetCategory;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(){
        $posts=Post::where([
            ['status','approved'],
            ['recever_id',Null],
            ['user_id','!=',auth()->user()->id]
        ])->get();
        return view('frontend.pages.post.post',compact('posts'));
        
        // dd($posts);

    }
    public function postcreate(){
        // $customers = Customer::all();
        $petcategories = PetCategory:: all();
        
        return view('frontend.pages.post.postform',compact('petcategories'));
    }
    public function postform (Request $request){
        //  dd($request->form_date);   
        // dd(auth()->user());
        $is_temp = 'no';
        if ($request->has('is_temporary')) {
            $is_temp = $request->is_temporary;
        }
        if ($request->hasFile('pet_img')) {
            $file= $request->file('pet_img');
            $filename = date('mdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
      $a=  Post::create([
            'user_id'=>auth()->user()->id,  //returns all info about user. only id is selected.
            'pet_category_id'=>$request->pet_category,
            'picture'=>$filename,
            'title'=>$request->title,
            'details'=>$request->details,
            'type'=>$request->type,
            'from_date'=>$request->form_date,
            'to_date'=>$request->to_date,
            'is_temporary'=>$is_temp,
        ]);
       // dd($a);
        return redirect()->route(route:'home');
             
    }
    public function postview($id)
    {
        //eloquent query- Model
        //raw query or query builder
        //find, first, get, all, where(), with, whereHas,
        //bootstrap grid
        $posts=Post::find($id);
        // dd($product->all());
        return view('frontend.pages.post.singlepostview',compact('posts'));
    }
    public function postadopt ($id)
    {
        // dd($id);
        $posts=Post::find($id);
        if ($posts->user_id != auth()->user()->id) {
            $posts->update([
                'recever_id'=>auth()->user()->id
            ]);
        }
        else {
            // dd('ok');
            return redirect()->back()->with('message','You can not adopt on your post.');
        }
        // dd($product->all());
    
        return redirect()->route('home')->with('message','Adoption Successful.');
    }
    public function postdonate ($id)
    {
        
        $posts=Post::find($id);
        if ($posts->user_id != auth()->user()->id) {
            $posts->update([
                'recever_id'=>auth()->user()->id
            ]);
        }
        else {
            return redirect()->back()->with('message','You can not donate on your post.');
        }
        return redirect()->route('home')->with('message','Donation Sucessful.');
    }

}


