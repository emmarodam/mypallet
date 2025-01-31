<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportUnitController;

Route::get('transport-units', [TransportUnitController::class, 'index']);
Route::get('trucks', [TransportUnitController::class, 'getTrucks']);
Route::get('trailers', [TransportUnitController::class, 'getTrailers']);
