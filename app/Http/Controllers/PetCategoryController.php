<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetCategory;

class PetCategoryController extends Controller
{
   
    public function petcategory(){
        $petcategories=PetCategory::all();
        return view('admin.pages.petcategory.petcategory',compact('petcategories'));
    }
    public function petcategoryform(){
        
        return view('admin.pages.petcategory.petcategoryform');
    }
    public function petcategorypost(Request $request){
        // dd($request->all());
        PetCategory::create([
            'pet_categories_name'=>$request->pet_categories_name,
            'details'=>$request->details,
            'status'=>$request->status,
            

        ]);
        return redirect()->route(route:'PetCategory');
             
    }
}
