<?php

namespace App\Http\Controllers;

use App\Models\TransportUnit;
use Illuminate\Http\Request;


class TransportUnitController extends Controller
{
    public function index()
    {
        $transportUnits = TransportUnit::orderBy('type')->get();
        return view('welcome', compact('transportUnits'));
    }

    public function getTrucks()
    {
        $trucks = TransportUnit::where('type', 'truck')->orderBy('name')->get();
        return view('partials.vehicle_list', compact('trucks'));
    }

    public function getTrailers()
    {
        $trailers = TransportUnit::where('type', 'trailer')->orderBy('name')->get();
        return view('partials.vehicle_list', compact('trailers'));
    }
}