<?php

use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShippingLineController;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Satus End point
Route::get('/status',[StatusController::class,'index']);
Route::post('/status',[StatusController::class,'store']);
Route::post('/status/{id}',[StatusController::class,'update']);

//Shipping Lines End point
Route::get('/shipping-lines',[ShippingLineController::class,'index']);
Route::post('/shipping-lines',[ShippingLineController::class,'store']);
Route::post('/shipping-lines/{id}',[ShippingLineController::class,'update']);

//Shipments Lines End point
Route::get('/shipment',[ShipmentController::class,'index']);
Route::post('/shipment',[ShipmentController::class,'store']);
Route::post('/shipment/{id}',[ShipmentController::class,'update']);
Route::delete('/shipment/{id}',[ShipmentController::class,'destroy']);
