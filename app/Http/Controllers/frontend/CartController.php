<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PetProduct;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        return view('frontend.pages.cart.cart');
    }

    public function addToCart($product_id)
    {
        //get product from database
        $product=PetProduct::find($product_id);
        // dd($product);

        // get cart from session if has
        $getCart=session()->get('cart');

            //check if cart is empty step 1
            if($getCart==null)
            {
                $newCart=[
                    $product->id=>[
                            'product_id'=>$product->id,
                            'name'=>$product->pet_product_name,
                            'price'=>$product->pet_product_price,
                            'quantity'=>1,
                            'image'=>$product->pet_product_picture,
                            'subtotal'=>$product->pet_product_price,
                            'discount'=>5,
                        ]
                ];

                session()->put('cart',$newCart);

                return redirect()->back()->with('message','Product Added to Cart');

            }


            //if not empty but product exist step 2

            if(array_key_exists($product_id,$getCart))
            {
                //increment quantity of existing product.
                ++$getCart[$product_id]['quantity'];
                $getCart[$product_id]['subtotal'] = (float)$getCart[$product_id]['price'] * (int)$getCart[$product_id]['quantity'];

                session()->put('cart',$getCart);
                return redirect()->back()->with('message','Product Quantity Updated');
            }else
            {
                //if not empty but product is different step 3
                $getCart[$product->id]=[
                        'name'=>$product->pet_product_name,
                        'price'=>$product->pet_product_price,
                        'quantity'=>1,
                        'image'=>$product->pet_product_picture,
                        'subtotal'=>$product->pet_product_price,
                        'discount'=>5,
                ];
                session()->put('cart',$getCart);
                return redirect()->back()->with('message','Product Added to Cart.');
            }

        }
        public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart Clear');
    } 
    public function deleteCart($product_id)
    {
        $updatedCart=session()->get('cart');
        unset($updatedCart[$product_id]);
        session()->put('cart',$updatedCart);

        return redirect()->back()->with('message','Item deleted.');
    }
    public function updateCart(Request $request,$product_id)
    {
        $getCart=session()->get('cart');
        $getCart[$product_id]['quantity']=$request->quantity;
        $getCart[$product_id]['subtotal']=(int)$request->quantity*(float)$getCart[$product_id]['price'];

        session()->put('cart',$getCart);
        return redirect()->back()->with('message','Product Quantity Updated');
    }

}
