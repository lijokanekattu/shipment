<?php

use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',[ShipmentController::class,'create']);

Route::post('/shipment',[ShipmentController::class,'store']);
