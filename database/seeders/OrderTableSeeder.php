<?php

namespace Database\Seeders;
use App\Models\Order;

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create ([
            'ordered_item_name'=>'cat playing rod',
            
            'total_product_price'=>'120tk',
            
            
           
        ]);
        Order::create ([
            'ordered_item_name'=>'tuna and salmon food',
            
            'total_product_price'=>'220tk',
            
            
           
        ]);
        Order::create ([
            'ordered_item_name'=>'ocean fish food',
            
            'total_product_price'=>'370tk',
            
            
           
        ]);
        Order::create ([
            'ordered_item_name'=>'anti hairball',
            
            'total_product_price'=>'675tk',
            
            
           
        ]);
        Order::create ([
            'ordered_item_name'=>'coat care gloves duo',
            
            'total_product_price'=>'375tk',
            
            
           
        ]);
    }
}
