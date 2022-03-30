<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetProductCategory;

class PetProductCategoryController extends Controller
{
  public function petproductcategory(){
      $petproductcategories=PetProductCategory::all();
       return view('admin.pages.petproductcategory.petproductcategory',compact('petproductcategories'));
  }  
  public function petproductcategoryform(){
    
    return view('admin.pages.petproductcategory.petproductcategoryform');
  }
  public function petproductcategorypost(Request $request){
    PetProductCategory::create([
      'pet_product_categories_name'=>$request->pet_product_categories_name,
      'details'=>$request->details,
      'status'=>$request->status,
      

  ]);
  return redirect()->route(route:'PetProductCategory');
       
    
    

  }
}
