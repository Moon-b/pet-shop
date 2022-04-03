<?php

namespace Database\Seeders;
use App\Models\AdoptionList;

use Illuminate\Database\Seeder;

class AdoptionListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdoptionList::create ([
            'adoption_form_date'=>'20/2/22',
            'reason_for_adoption'=>'Beacause i like birds',
            'adoption_form_status'=>'A percian bird wanted to adopt',
            
            
           
        ]);
        AdoptionList::create ([
            'adoption_form_date'=>'23/8/21',
            'reason_for_adoption'=>'Beacause I would love  to spending my time with a dog ',
            'adoption_form_status'=>'A percian dog wanted to adopt',
            
            
           
        ]);
    } 
    }

