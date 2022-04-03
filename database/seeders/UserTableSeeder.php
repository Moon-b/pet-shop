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
        ]);
    }
}
