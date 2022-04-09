<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PetProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $product = PetProduct::all();
        return view('frontend.pages.home', compact('product'));
    }
    public function showProduct($product_id)
    {
        //eloquent query- Model
        //raw query or query builder
        //find, first, get, all, where(), with, whereHas,
        //bootstrap grid
        $product=PetProduct::find($product_id);
        // dd($product->all());
        return view('frontend.pages.product.product',compact('product'));
    }

}
