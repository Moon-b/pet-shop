<?php

namespace Database\Seeders;
use App\Models\Pet;

use Illuminate\Database\Seeder;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::create([
            'pet_name'=>'Jack',
            'pet_breed'=>'Persian',
            'pet_size'=>'12 inch',
            'pet_color'=>'white',
            'pet_life_span'=>'12 to 15 years',
            'pet_height'=>'3 feet',
            'pet_age'=>'10 days',
            'pet_weight'=>'5 kg',
            'rules'=>'bath in cold water',
            'pet_health'=>'good',
            'pet_quality'=>'great',

        ]);
        Pet::create([
            'pet_name'=>'Ocean',
            'pet_breed'=>'American',
            'pet_size'=>'15 inch',
            'pet_color'=>'black',
            'pet_life_span'=>'11 to 15 years',
            'pet_height'=>'4 feet',
            'pet_age'=>'12 days',
            'pet_weight'=>'6 kg',
            'rules'=>'bath in cold water',
            'pet_health'=>'good',
            'pet_quality'=>'great',

        ]);
    }
}
