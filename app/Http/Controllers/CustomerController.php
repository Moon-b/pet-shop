<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        $customers=Customer::all();
        return view('admin.pages.customer.customer',compact('customers'));
}
public function customerform(){
    $customers=Customer::all();
        
    return view('admin.pages.customer.customerform',compact('customers'));
}
public function customerpost(Request $request){
    // dd($request->all());
    Customer::create([
        'customer_image'=>$request->customer_image,
            'customer_first_name'=>$request->customer_first_name,
            'customer_last_name'=>$request->customer_last_name,
            'customer_address'=>$request->customer_address,
            'customer_country'=>$request->customer_country,
            'customer_city'=>$request->customer_city,
            'customer_phone'=>$request->customer_phone,
            'customer_email'=>$request->customer_email,

    ]);
    return redirect()->route(route:'Customer');
         
}
public function customeredit($id){
    // $categories = Category::all(); 
    $customers = Customer::find($id);
    if ($customers) {
    return view('admin.pages.customer.customeredit',compact('customers'));
    } else {
        return redirect()->back();
    }

}

public function customerupdate(Request $request,$id){
    // dd($request->all());
    $customers = Customer::find($id);
    if ($customers) {
        $customers->update([
            'customer_image'=>$request->customer_image,
            'customer_first_name'=>$request->customer_first_name,
            'customer_last_name'=>$request->customer_last_name,
            'customer_address'=>$request->customer_address,
            'customer_country'=>$request->customer_country,
            'customer_city'=>$request->customer_city,
            'customer_phone'=>$request->customer_phone,
            'customer_email'=>$request->customer_email,
            
            
        ]);
        return redirect()->route(route:'Customer');
    } else {
        return redirect()->back();
    }


}

public function customerdelete($id){
    $customers =Customer::find($id);
    if ($customers) {
        $customers->delete();
        return redirect()->back();

    } else {
    return redirect()->back();
    }

}
}
