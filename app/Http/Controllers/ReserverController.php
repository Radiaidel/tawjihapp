<?php

namespace App\Http\Controllers;

use App\Models\Reserver;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReserverRequest;
use App\Http\Requests\UpdateReserverRequest;

class ReserverController extends Controller
{
    public function index()
    {
        $reservations = Reserver::all();
        return response()->json($reservations);
    }

    public function store(StoreReserverRequest $request)
    {
        $reserver = Reserver::create($request->validated());
        return response()->json($reserver, 201);
    }

    public function update(UpdateReserverRequest $request, Reserver $reserver)
    {
        $reserver->update($request->validated());
        return response()->json($reserver, 200);
    }

    public function show(Reserver $reservation)
    {
        return response()->json($reservation);
    }

    public function destroy(Reserver $reservation)
    {
        $reservation->delete();
        return response()->json(['message' => 'Reservation deleted successfully']);
    }
}
