<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
    // DB::table("products")->insert([
    //     [
    //         "id"=> 1,
    //         "name"=> "Smartphone Ultra X1",
    //         "price"=> 4599000,
    //         "description"=> "Smartphone dengan layar AMOLED 6.5 inci dan baterai 5000 mAh."
    //     ]
    // ]);
    
    }
}
