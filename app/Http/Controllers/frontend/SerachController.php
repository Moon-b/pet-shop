<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PetProduct;
use Illuminate\Http\Request;

class SerachController extends Controller
{
    
        public function search(Request $request){
            $search = $request['search']??"";
          
            if($search !=""){
                $product = PetProduct::where('pet_product_name','LIKE',"%$search%")->get();
            }
            else{
                $product = PetProduct::all();
            }
            return view('frontend.pages.search',compact('product'));
        }
    }

