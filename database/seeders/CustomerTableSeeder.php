<?php

namespace Database\Seeders;
use App\Models\Customer;

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create ([
           
           
        
        
        'customer_image'=>'mun.jpg',
        'customer_first_name'=>'Ela',
        'customer_last_name'=>'Khan',
        'customer_address'=>'sector 10,road 12 ,house no:58',
        'customer_country'=>'Bangladesh',
        'customer_city'=>'Uttara,Dhaka',
        'customer_phone'=>'01879879870',
        'customer_email'=>'ela12@gmail.com',
        ]);
    }
}