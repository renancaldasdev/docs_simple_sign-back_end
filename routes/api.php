<?php

use App\Customer\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});

// Customer

Route::post('/customers', [CustomerController::class, 'store']);