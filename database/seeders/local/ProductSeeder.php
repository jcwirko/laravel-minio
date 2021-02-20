<?php

namespace Database\Seeders\Local;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory(5)->create();
    }
}
