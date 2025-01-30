<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportUnitController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TransportUnitController::class, 'index']);
Route::get('/trucks', [TransportUnitController::class, 'getTrucks']);
Route::get('/trailers', [TransportUnitController::class, 'getTrailers']);