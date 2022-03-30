<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetCategory;


class PetController extends Controller
{
    public function pet(){
        $pets=Pet::with('petcategory')->get();
        // dd($pets);
        return view('admin.pages.pet.pet',compact('pets'));
    }
    public function petform(){
        $petcategories = PetCategory::all();
        return view('admin.pages.pet.petForm',compact('petcategories'));
    }
public function petpost(Request $request){
    //  dd($request->all());
    $request->validate([
        'pet_name'=>'required',
        'pet_categories_id'=>'required',
        'pet_breed'=>'required',
        'pet_size'=>'required',
        'pet_color'=>'required',
        'pet_life_span'=>'required',
        'pet_age'=>'required',
        'pet_height'=>'required',
        'rules'=>'required',
        'pet_weight'=>'required',
        
        'pet_quality'=>'required',
        'pet_image'=>'image'
    

    ]);
    $filename = null;
    if ($request->hasFile('pet_image')) {
        $file=$request->file('pet_image');
        $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file ->storeAs('/uploads',$filename);
    }
    Pet::create([
        
        'pet_name'=>$request->pet_name,
        'pet_categories_id'=>$request->pet_categories_id,
        'pet_breed'=>$request->pet_breed,
        'pet_size'=>$request->pet_size,
        'pet_color'=>$request->pet_color,
        'pet_life_span'=>$request->pet_life_span,
        'pet_age'=>$request->pet_age,
        'pet_height'=>$request->pet_height,
        'rules'=>$request->rules,
        'pet_weight'=>$request->pet_weight,
        'pet_health'=>$request->pet_health,
        'pet_quality'=>$request->pet_quality,
        'pet_image'=>$filename
    ]);
    return redirect()->route(route:'Pet');
         
}
 public function petedit($id){
    $petcategories =PetCategory::all(); 
    $pets = Pet::find($id);
    if ($pets) {
    return view('admin.pages.pet.petedit',compact('petcategories','pets'));
    } else {
        return redirect()->back();
    }
    
}
public function petupdate(Request $request,$id){

    $pets=Pet::find($id);
    $filename=$pets->pet_image;
    // if ($request->hasFile('pet_image')) {
    //     $file=$request->file('pet_image');
    //     $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
    //     $file ->storeAs('/uploads',$filename);
    // }
if($pets){
$pets->update([
    
    'pet_name'=>$request->pet_name,
    'pet_categories_id'=>$request->pet_categories_id,
    'pet_breed'=>$request->pet_breed,
    'pet_size'=>$request->pet_size,
    'pet_color'=>$request->pet_color,
    'pet_life_span'=>$request->pet_life_span,
    'pet_age'=>$request->pet_age,
    'pet_height'=>$request->pet_height,
    'rules'=>$request->rules,
    'pet_weight'=>$request->pet_weight,
    'pet_health'=>$request->pet_health,
    'pet_quality'=>$request->pet_quality,
    'pet_image'=>$filename,

]);
 return redirect()->route(route:'Pet');
}
else
{
    return redirect()->back();
}
}
public function petdelete($id){
    $pets=Pet::find($id);
    if($pets){
        $pets->delete();
        return redirect()->back();
    }
    else
    {
        return redirect()->back();
    }
}

}