<?php

namespace Database\Seeders;
use App\Models\OrderDetails;

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetails::create ([
            'shipping_fee'=>'35tk',
            'single_product_price'=>'300tk',
            'quantity'=>'2',
            'subtotal'=>'600tk',
            'total'=>'635tk',
            
           
            
            
           
        ]);
        OrderDetails::create ([
            'shipping_fee'=>'35tk',
            'single_product_price'=>'100tk',
            'quantity'=>'2',
            'subtotal'=>'200tk',
            'total'=>'235tk',
            
           
            
            
           
        ]);
        OrderDetails::create ([
            'shipping_fee'=>'35tk',
            'single_product_price'=>'600tk',
            'quantity'=>'4',
            'subtotal'=>'2400tk',
            'total'=>'2435tk',
            
           
            
            
           
        ]);
        OrderDetails::create ([
            'shipping_fee'=>'35tk',
            'single_product_price'=>'400tk',
            'quantity'=>'2',
            'subtotal'=>'800tk',
            'total'=>'835tk',
            
           
            
            
           
        ]);
       
    }
}
