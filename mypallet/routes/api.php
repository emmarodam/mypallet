<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportUnitController;

Route::get('/transport-units', [TransportUnitController::class, 'index']);