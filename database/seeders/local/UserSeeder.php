<?php

namespace Database\Seeders\Local;

use App\Models\User;
use App\Values\AbilitiesValues;
use App\Values\RolesValues;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
    }
}
