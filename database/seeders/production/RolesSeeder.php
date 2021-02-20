<?php

namespace Database\Seeds\Production;

use App\Values\RolesValues;
use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Bouncer::role()->create([
            'name' => RolesValues::ADMIN['name'],
            'title' => RolesValues::ADMIN['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::SUPERVISOR['name'],
            'title' => RolesValues::SUPERVISOR['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::PEDDLER['name'],
            'title' => RolesValues::PEDDLER['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::CASHIER['name'],
            'title' => RolesValues::CASHIER['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::GOMERO['name'],
            'title' => RolesValues::GOMERO['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::DRIVER['name'],
            'title' => RolesValues::DRIVER['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::MECHANIC['name'],
            'title' => RolesValues::MECHANIC['title']
        ]);

        Bouncer::role()->create([
            'name' => RolesValues::CLIENT['name'],
            'title' => RolesValues::CLIENT['title']
        ]);
    }
}
