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
}
