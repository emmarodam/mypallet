<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportUnit;


class TransportUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trucks = TransportUnit::where('type', 'truck')->get();
        $trailers = TransportUnit::where('type', 'trailer')->get();

        return view('welcome', compact('trucks', 'trailers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
