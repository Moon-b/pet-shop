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
    // dd($request->all());
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

        
       


        

    ]);
    return redirect()->route(route:'Pet');
         
}
// public function delete($id)
// {
//     pet::find($id)->delete();
//     return redirect()->back();
// }


}