<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('frontend.pages.checkout.checkout');
    }
    public function orderPlace(Request  $request)
    {
    //    dd($request->all());

        //step 1 create order

        $order=Order::create([
          'user_id' =>auth()->user()->id,
        //    'user_id' =>1,
           'receiver_first_name' =>$request->first_name,
           'receiver_last_name' =>$request->last_name,
           'receiver_email' =>$request->email,
           'receiver_address' =>$request->address,
           'total' =>array_sum(array_column(session()->get('cart'),'subtotal')),
        ]);
        return redirect()->route('home');
    }
}
