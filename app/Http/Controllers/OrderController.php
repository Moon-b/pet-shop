<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(){
        $orders=Order::all();
         return view('admin.pages.order.order',compact('orders'));
    }  
}
