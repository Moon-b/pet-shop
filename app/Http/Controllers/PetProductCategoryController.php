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
  public function petproductcategoryedit ($id){
    // $petcategories =PetCategory::all(); 
    $petproductcategories = PetProductCategory::find($id);
    if ($petproductcategories) {
    return view('admin.pages.petproductcategory.petproductcategoryedit',compact('petproductcategories'));
    } else {
        return redirect()->back();
    }
    
}
public function petproductcategoryupdate(Request $request,$id){

    $petproductcategories=PetProductCategory::find($id);
    
    
if($petproductcategories){
$petproductcategories->update([
  'pet_product_categories_name'=>$request->pet_product_categories_name,
  'details'=>$request->details,
  'status'=>$request->status,

]);
 return redirect()->route(route:'PetProductCategory');
}
else
{
    return redirect()->back();
}
}
// public function petproductcategorydelete($id){
  
//     $petproductcategories=PetProductCategory::find($id);
//     if($petproductcategories){
//         $petproductcategories->delete();
//         return redirect()->back();
//     }
//     else
//     {
//         return redirect()->back();
//     }

public function petproductcategorydelete($id){
  $petproductcategories=PetProductCategory::find($id);
  if($petproductcategories){
      $petproductcategories->delete();
      return redirect()->back();
  }
  else
  {
      return redirect()->back();
  }
}

}
