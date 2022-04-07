<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
'name'=>'Munmun',
'email'=>'munmun.iubat12@gmail.com',
'password'=>bcrypt('1234'),
'user_image'=>'mun.jpg',

    
        'user_address'=>'sector 10,road 12 ,house no:58',
        'user_country'=>'Bangladesh',
        'user_city'=>'Uttara,Dhaka',
        'user_phone'=>'01879879870',
        'roll'=>'admin',
        ]);
    }
}
