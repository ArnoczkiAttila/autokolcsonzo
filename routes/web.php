<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('App');
});
Route::post('/api/car/save',[CarController::class,'saveCar']);
Route::post('/api/rent/save',[RentController::class,'saveRent']);

Route::get('/api/car/index',[CarController::class,'index']);
Route::get('/api/rent/index',[RentController::class,'index']);

require __DIR__.'/auth.php';
