<?php

namespace Database\Seeders;

use App\Models\PetProduct;
use Illuminate\Database\Seeder;

class PetProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetProduct::create ([
            'pet_product_name'=>'Pet Snacks',
            'pet_product_picture'=>'not found',
            'pet_product_details'=>'Top Selling Canned Beef Pet Food Pet Supplies Dog Wet Dog Food',
            'pet_product_price'=>'300tk',
            'pet_product_status'=>'suitable for dog',
            'pet_product_categories_id'=> 1
           
        ]);
        
        PetProduct::create ([
            'pet_product_name'=>'Pet snacks',
            'pet_product_picture'=>'not found',
            'pet_product_details'=>'Cat Wet Food Cat Snacks Private Label Cat Treats',
            'pet_product_price'=>'400tk',
            'pet_product_status'=>'suitable for dog and pet',
            'pet_product_categories_id'=> 1

           
        ]);
        PetProduct::create ([
            'pet_product_name'=>'Chew Toy',
            'pet_product_picture'=>'not found',
            'pet_product_details'=>'KEEP YOUR DOG INTRIGUED: With a squeaker in the head and another in the tail, this stuffing-free dog toy makes every bite a delightfully squeaky treat.',
            'pet_product_price'=>'120tk',
            'pet_product_status'=>'suitable for Dog',
            'pet_product_categories_id'=> 1

           
        ]);
        PetProduct::create ([
            'pet_product_name'=>'Chew Toy',
            'pet_product_picture'=>'not found',
            'pet_product_details'=>'MADE OF DURABLE NYLON - Long lasting dog chew toy challenges even the most aggressive chewers and discourages destructive chewing',
            'pet_product_price'=>'15000tk',
            'pet_product_status'=>'suitable for dog',
            'pet_product_categories_id'=> 1

           
        ]);
    }
    }

