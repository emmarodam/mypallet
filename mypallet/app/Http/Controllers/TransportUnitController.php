<?php

namespace App\Http\Controllers;

use App\Models\TransportUnit;
use Illuminate\Http\Request;

class TransportUnitController extends Controller
{
    public function index()
    {
        // Initialt load både trucks og trailers (for standard visning)
        $transportUnits = TransportUnit::orderBy('type')->get();

        return view('welcome', compact('transportUnits'));
    }

    public function getTrucks(Request $request)
    {
        $query = TransportUnit::where('type', 'truck');
        
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $trucks = $query->orderBy('name')->get();  // Sorter efter name i stedet for type
        return view('partials.vehicle_list', compact('trucks'));
    }

    public function getTrailers(Request $request)
    {
        $query = TransportUnit::where('type', 'trailer');
        
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $trailers = $query->orderBy('name')->get();  // Sorter efter name i stedet for type
        return view('partials.vehicle_list', compact('trailers'));
    }

    // For at håndtere søgning på tværs af både trucks og trailers
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $filteredUnits = TransportUnit::where('name', 'like', '%' . $searchTerm . '%')
                                      ->orderBy('type')  // Sorter efter type
                                      ->get();

        // Returnér de filtrerede enheder
        return view('partials.vehicle_list', ['filteredUnits' => $filteredUnits]);
    }
}