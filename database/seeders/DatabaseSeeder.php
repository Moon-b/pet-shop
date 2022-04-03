<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this ->call(PetCategoryTableSeeder::class);
        $this ->call(PetTableSeeder::class);
        $this ->call(PetProductCategoryTableSeeder::class);
        $this ->call(PetProductTableSeeder::class);
        $this ->call(CustomerTableSeeder::class);
        $this ->call(DonationListTableSeeder::class);
        $this ->call(AdoptionListTableSeeder::class);
        $this ->call(UserTableSeeder::class);
    }
}
