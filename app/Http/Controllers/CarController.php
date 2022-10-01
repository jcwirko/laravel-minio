<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::get();

        return view('cars.index', compact('cars'));
    }

    public function store(UserRequest $request)
    {

    }
}
