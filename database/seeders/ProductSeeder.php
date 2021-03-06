<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['Sepatu', 'Jaket', 'Syal', 'Double Boneka', 'Sweater', 'Boneka'];
        $price = [18.25, 16.75, 32.50, 24.60, 18.75, 12.50];
        $image = [
            'assets/images/product_01.jpg', 'assets/images/product_02.jpg', 'assets/images/product_03.jpg',
            'assets/images/product_04.jpg', 'assets/images/product_05.jpg', 'assets/images/product_06.jpg'
        ];
        $content = [
            'product sepatu', 'product jaket', 'product syal',
            'product boneka', 'product seweater', 'product boneka lagi'
        ];
        $review = [12, 24, 36, 48, 60, 72];
        $category = ['des', 'dev', 'gra', 'gra', 'dev', 'des'];

        for ($i=0; $i <6 ; $i++) { 
            DB::table('products')->insert([
                'title' => $title[$i],
                'price' => $price[$i],
                'content' => $content[$i],
                'image' => $image[$i],
                'totalReview' => $review[$i],
                'category' => $category[$i]
            ]);
        }
    }
}
