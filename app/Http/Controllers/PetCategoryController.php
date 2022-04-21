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
         
            

        ]);
        return redirect()->route(route:'PetCategory');
             
    }
    public function petcategoryedit ($id){
        // $petcategories =PetCategory::all(); 
        $petcategories = PetCategory::find($id);
        if ($petcategories) {
        return view('admin.pages.petcategory.petcategoryedit',compact('petcategories'));
        } else {
            return redirect()->back();
        }
        
    }
    public function petcategoryupdate(Request $request,$id){
    
        $petcategories=PetCategory::find($id);
        
        
    if($petcategories){
    $petcategories->update([
        'pet_categories_name'=>$request->pet_categories_name,
            'details'=>$request->details,
       
        
    
    ]);
     return redirect()->route(route:'PetCategory');
    }
    else
    {
        return redirect()->back();
    }
    }
    public function petcategorydelete($id){
        $petcategories=PetCategory::find($id);
        if($petcategories){
            $petcategories->delete();
            return redirect()->back();
        }
        else
        {
            return redirect()->back();
        }
    }
    
    }

