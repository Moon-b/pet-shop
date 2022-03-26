<?php

namespace Database\Seeders;
use App\Models\PetCategory;

use Illuminate\Database\Seeder;

class PetCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetCategory::create ([
            'pet_categories_name'=>'Dog',
            'details'=>'parsian,amirican breed',
            'status'=>'available',
           
        ]);
        
        PetCategory::create ([
            'pet_categories_name'=>'Cat',
            'details'=>'parsian,amirican breed',
            'status'=>'not available',
           
        ]);
        PetCategory::create ([
            'pet_categories_name'=>'Bird',
            'details'=>'parsian,amirican breed',
            'status'=>'available',
        ]);
        PetCategory::create ([
            'pet_categories_name'=>'Fish',
            'details'=>'parsian,amirican breed',
            'status'=>'not available',
           
        ]);
    }
}
