<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;
class RentController extends Controller
{
    public function saveRent(Request $request) {
        $request->validate([
            'car_id'=>'required',
            'email'=>['required'],
            'kezdet'=>['required'],
            'vege'=>['required'],
        ]);
        $rent = Rent::create($request->all());
        return response()->json($rent,200);
    }
    public function index() {
        $rents = Rent::all()->load('car');
        return response()->json($rents,200);
    }
}
