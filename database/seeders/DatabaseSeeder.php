<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Partner;
use App\Models\Product;

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
        $this->call([
            MemberSeeder::class,
            PartnerSeeder::class,
            ProductSeeder::class,
        ]);
        Partner::factory(5)->create();
        Product::factory(18)->create();
    }
}
