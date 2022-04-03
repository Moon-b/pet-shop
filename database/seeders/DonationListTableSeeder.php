<?php

namespace Database\Seeders;
use App\Models\DonationList;

use Illuminate\Database\Seeder;

class DonationListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonationList::create ([
            'donation_form_date'=>'20/2/22',
            'reason_for_donation'=>'Beacause urgently i need to go to abroad',
            'donation_form_status'=>'A percian cat wanted to donate',
            
            
           
        ]);
             DonationList::create ([
            'donation_form_date'=>'23/8/21',
            'reason_for_donation'=>'Beacause I havenot enough time for this',
            'donation_form_status'=>'A percian dog wanted to donate',
            
            
           
        ]);
        
}
}
