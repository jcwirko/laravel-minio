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
        User::create([
            'first_name' => 'Test',
            'last_name' => 'Test',
            'birthdate' => '1995-01-23',
            'email' => 'test@test.com',
            'password' => Hash::make('secret')
        ]);

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'birthdate' => '1988-08-16',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);

        Bouncer::allow(RolesValues::ADMIN['name'])->to(AbilitiesValues::ADMINISTRATION_MODULE['name']);
        Bouncer::allow(RolesValues::ADMIN['name'])->to(AbilitiesValues::UPDATE_ROLES['name']);
        Bouncer::assign(RolesValues::ADMIN['name'])->to($admin);

        User::factory(10000)->create();
        User::factory(10000)->create();
        User::factory(10000)->create();

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'birthdate' => '1988-08-16',
            'email' => 'return@gmail.com',
            'password' => Hash::make('secret')
        ]);

        User::factory(10000)->create();
        User::factory(10000)->create();
        User::factory(10000)->create();

    }
}
