<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\PetProduct;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        if (auth()->check()) {
            return view('frontend.pages.checkout.checkout'); 
        }
        else {
            return redirect()->route('home')->with('error','You need to login first...!');
        }
    }
    public function orderPlace(Request  $request)
    {

        $request->validate([
          
        'receiver_first_name' =>'required',
        'receiver_last_name' =>'required',
        'receiver_email' =>'required',
        'receiver_address' =>'required',
        // 'total' =>array_sum(array_column(session()->get('cart'),'subtotal')),
        'contact'=>'required',
       
    

    ]);
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
        // step 2 insert product into order details
        foreach(session()->get('cart') as $product_id=>$cartData){
        // foreach ($cart as $key => $value) {
                OrderDetails::create([
                'order_id'=>$order->id,
                'item_id'=> $product_id,
                'quantity'=>$cartData['quantity'],
                'unit_price'=>(float)$cartData['price'],
                'subtotal'=>(float)$cartData['subtotal']
            ]);
              //stock update here
              $product=PetProduct::find($product_id);
              $product->decrement('available_quantity',$cartData['quantity']);
  
  
        
        }
        session()->forget('cart');
        return redirect()->route('home')->with('message','Order Placed Successfully');
    }
        // session()->forget('cart');
        // return redirect()->route('home');
       



    // public function myorder(){   
    //     $order = Post::where('user_id',auth()->user()->id)->get();
    //     return view('frontend.pages.myprofile.mypost',compact('posts'));
    // }

   
}
