<?php

namespace Database\Seeders;

use Database\Seeders\Local\ProductSeeder;
use Database\Seeders\Local\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call([
             UserSeeder::class,
             ProductSeeder::class
         ]);
    }
}
