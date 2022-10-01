<?php

namespace Database\Seeders;

use Database\Seeders\Local\CarSeeder;
use Database\Seeders\Local\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call([
             CarSeeder::class
         ]);
    }
}
