<?php

namespace App\Http\Controllers;

use App\Models\Reserver;
use Illuminate\Http\Request;

class ReserverController extends Controller
{
    public function index()
    {
        $reservations = Reserver::all();
        return response()->json($reservations);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_reservation' => 'required|date',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
            'Id_Service' => 'required|exists:services,id',
        ]);

        $reservation = Reserver::create($validatedData);
        return response()->json(['message' => 'Reservation created successfully', 'reservation' => $reservation], 201);
    }

    public function show(Reserver $reservation)
    {
        return response()->json($reservation);
    }

    public function update(Request $request, Reserver $reservation)
    {
        $validatedData = $request->validate([
            'date_reservation' => 'required|date',
            'Id_Utilisateur' => 'required|exists:utilisateurs,id',
            'Id_Service' => 'required|exists:services,id',
        ]);

        $reservation->update($validatedData);
        return response()->json(['message' => 'Reservation updated successfully', 'reservation' => $reservation]);
    }

    public function destroy(Reserver $reservation)
    {
        $reservation->delete();
        return response()->json(['message' => 'Reservation deleted successfully']);
    }
}
