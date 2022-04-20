<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\PetProduct;


class OrderViewController extends Controller
{
    public function order(){
        $order=Order::all();
         return view('admin.pages.order.order',compact('order'));
    }  
    public function view($id)
    {
        $order=Order::with('details')->find($id);
// dd($order);
        return view('admin.pages.order.invoice',compact('order'));
    }
    public function orderapprove($id){
        $order = Order::find($id)->update([
            'order_status'=>'approved'
        ]);
        return redirect()->back();
    }
    // public function ordercancel($id){
    //     $order = Order::find($id)->update([
    //         'status'=>'cancel'
    //     ]);
    //     return redirect()->back();
    // }
    public function statusOrder($id){
        $order = Order::find($id);
        if ($order) {
            $order_details = OrderDetails::where('order_id',$order->id)->get();
            foreach ($order_details as $key => $value) {
                $PetProduct=PetProduct::find($value->item_id);
                if ($PetProduct) {
                    $PetProduct->update([
                        'available_quantity'=> $PetProduct->available_quantity + $value->quantity
                    ]);
                }
            }
            $order ->update([
                'order_status'=>'cancel'
            ]);
            return redirect()->back();
        }
        
    }
}


