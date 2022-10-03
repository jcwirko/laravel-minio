<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::get();

        return view('cars.index', compact('cars'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $fileName = time().Str::random('10').".$extension";
        $filePath = 'cars/' . $fileName;

        Storage::put($filePath, file_get_contents($image));

        Car::create([
           'model' => $request->input('model'),
           'image_code' => $filePath
        ]);

        return redirect()->route('cars.index');
    }
}
