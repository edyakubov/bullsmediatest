<?php

use Illuminate\Support\Facades\Route;


Route::post('/create-shipment-order', [App\Http\Controllers\DeliveryController::class, 'store']);
