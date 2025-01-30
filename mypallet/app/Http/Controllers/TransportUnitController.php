<?php

namespace App\Http\Controllers;

use App\Models\TransportUnit;
use Illuminate\Http\Request;

class TransportUnitController extends Controller
{
    public function index()
    {
        // Initially load both trucks and trailers (for default view)
        $transportUnits = TransportUnit::orderBy('type')->get();

        return view('welcome', compact('transportUnits'));
    }

    public function getTrucks()
    {
        // Filter for only trucks, sorted by type
        $trucks = TransportUnit::where('type', 'truck')->orderBy('type')->get();
        return view('partials.vehicle_list', compact('trucks'));
    }

    public function getTrailers()
    {
        // Filter for only trailers, sorted by type
        $trailers = TransportUnit::where('type', 'trailer')->orderBy('type')->get();
        return view('partials.vehicle_list', compact('trailers'));
    }
}