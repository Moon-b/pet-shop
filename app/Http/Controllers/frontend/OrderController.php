<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
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
        $cart = session('cart');
        // dd($cart);
        //step 1 create order

        $order=Order::create([
          'user_id' =>auth()->user()->id,
        //    'user_id' =>1,
           'receiver_first_name' =>$request->first_name,
           'receiver_last_name' =>$request->last_name,
           'receiver_email' =>$request->email,
           'receiver_address' =>$request->address,
           'total' =>array_sum(array_column(session()->get('cart'),'subtotal')),
           'contact'=>$request->contact,
        ]);
        foreach ($cart as $key => $value) {
                OrderDetails::create([
                'order_id'=>$order->id,
                'item_id'=> $key,
                'quantity'=>$value['quantity'],
                'unit_price'=>(float)$value['price'],
                'subtotal'=>(float)$value['subtotal']
            ]);
        }
        session()->forget('cart');
        return redirect()->route('home');
    }
    // public function myorder(){   
    //     $order = Post::where('user_id',auth()->user()->id)->get();
    //     return view('frontend.pages.myprofile.mypost',compact('posts'));
    // }

}
