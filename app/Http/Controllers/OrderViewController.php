<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderViewController extends Controller
{
    public function order(){
        $order=Order::all();
         return view('admin.pages.order.order',compact('order'));
    }  
}


