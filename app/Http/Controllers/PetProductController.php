<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetProduct;
use App\Models\PetProductCategory;

class PetProductController extends Controller
{
    public function petproduct(){
        // $petproducts=PetProduct::all();
        $petproducts=PetProduct::with('petproduct')->get();
         return view('admin.pages.petproduct.petproduct',compact('petproducts'));
    }  
    public function petproductform(){
        $petproductcategories = PetProductCategory::all();
        // return view('admin.pages.pet.petForm',compact('petcategories'));
        return view('admin.pages.petproduct.petproductform',compact('petproductcategories'));
    }
    public function petproductpost(Request $request){
        // dd($request->all());
        $request->validate([
            
            'pet_product_categories_id'=>'required',
            'pet_product_name'=>'required',
            'pet_product_details'=>'required',
            'pet_product_picture'=>'image',
            'pet_product_price'=>'required',
            'pet_product_status'=>'required',
        
    
        ]);
        $filename = null;
        if ($request->hasFile('pet_product_picture')) {
            $file=$request->file('pet_product_picture');
            // dd($file);
            // dd(date('Ymdhis'));
            $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file ->storeAs('/uploads',$filename);
        }
        PetProduct::create([
            // dd('$request(all)');
            'pet_product_categories_id'=>$request->pet_product_categories_id,
            'pet_product_name'=>$request->pet_product_name,
            'pet_product_details'=>$request->pet_product_details,
            'pet_product_picture'=>$filename,
            'pet_product_price'=>$request->pet_product_price,
            'pet_product_status'=>$request->pet_product_status,

        ]);
        return redirect()->route(route:'PetProduct');

    }
    public function petproductedit($id){
        $petproductcategories = PetProductCategory::all(); 
        $petproducts = PetProduct::find($id);
        if ($petproducts) {
        return view('admin.pages.petproduct.petproductedit',compact('petproductcategories','petproducts'));
        } else {
            return redirect()->back();
        }

    }

    public function petproductupdate(Request $request, $id){
        $request->validate([
            
            'pet_product_categories_id'=>'required',
            'pet_product_name'=>'required',
            'pet_product_details'=>'required',
            'pet_product_price'=>'required',
            'pet_product_status'=>'required',
        
    
        ]);
        // dd($request->all(),$id);
        $petproducts = PetProduct::find($id);
       
    $filename=$petproducts->pet_product_picture;
    if ($request->hasFile('pet_product_picture')) {
        $file=$request->file('pet_product_picture');
        // dd($file);
        // dd(date('Ymdhis'));
        $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
        // dd($filename);
        $file ->storeAs('/uploads',$filename);
    }
        if ($petproducts) {
            $petproducts->update([
                'pet_product_categories_id'=>$request->pet_product_categories_id,
            'pet_product_name'=>$request->pet_product_name,
            'pet_product_details'=>$request->pet_product_details,
            'pet_product_picture'=>$filename,
            'pet_product_price'=>$request->pet_product_price,
            'pet_product_status'=>$request->pet_product_status,
                
            ]);
            return redirect()->route('PetProduct');
        } else {
            return redirect()->back();
        }


    }

    public function petproductdelete($id){
        $petproducts =PetProduct::find($id);
        if ($petproducts) {
            $petproducts->delete();
            return redirect()->back();

        } else {
        return redirect()->back();
        }

    }
}


