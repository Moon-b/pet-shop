<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetProduct;

class PetProductController extends Controller
{
    public function petproduct(){
        $petproducts=PetProduct::all();
         return view('admin.pages.petproduct.petproduct',compact('petproducts'));
    }  
    public function petproductform(){
        return view('admin.pages.petproduct.petproductform');
    }
    public function petproductpost(Request $request){
        PetProduct::create([
            
            'pet_product_name'=>$request->pet_product_name,
            'pet_product_details'=>$request->pet_product_details,
            'pet_product_picture'=>$request->pet_product_picture,
            'pet_product_price'=>$request->pet_product_price,
            'pet_product_status'=>$request->pet_product_status,

        ]);
        return redirect()->route(route:'PetProduct');

    }

}
