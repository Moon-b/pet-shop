<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;

class OrderDetailsController extends Controller
{
    public function orderdetails(){
        $orderdetails=OrderDetails::all();
         return view('admin.pages.orderdetails.orderdetails',compact('orderdetails'));
    }  
}
