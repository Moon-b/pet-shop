<?php

namespace Database\Seeders;
use App\Models\PetProductCategory;
use Illuminate\Database\Seeder;

class PetProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetProductCategory::create ([
            'pet_product_categories_name'=>'Pet Toys',
            'details'=>'Durable toy consisting of three levels of exciting play,Great fun for your pets.',
           
           
        ]);
        
        PetProductCategory::create ([
            'pet_product_categories_name'=>'Pet Food',
            'details'=>'Feed your growing explorer an ultra-high protein diet to fuel his adventures',
            
           
        ]);
        PetProductCategory::create ([
            'pet_product_categories_name'=>'Pet Treats ',
            'details'=>'Zero grains,gluten,wheat,corn,soy,potatoes,paultry by- product meals',
      
        ]);
        PetProductCategory::create ([
            'pet_product_categories_name'=>'Pet Pharmacy',
            'details'=>'Prevent heartworm disease by eliminating the tissue stage of heartworm larvae',
           
           
        ]);
    }
    
}
