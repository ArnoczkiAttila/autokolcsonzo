<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
class CarController extends Controller
{
    public function saveCar(Request $request) {
        $request->validate([
            'modell'=>'required',
            'kaucio'=>['required'],
            'kilometerdij'=>['required'],
            'napidij'=>['required'],
            'leiras'=>['required'],
        ]);
        $car = Car::create($request->all());
        return response()->json($car,200);
    }
    public function index() {
        $cars = Car::all();
        return response()->json($cars,200);
    }
}
