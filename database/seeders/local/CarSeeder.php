<?php

namespace Database\Seeders\Local;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::factory(5)->create();
    }
}
