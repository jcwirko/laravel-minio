<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'model' => $this->faker->firstName,
            'image_code' => Str::random(10)
        ];
    }
}
