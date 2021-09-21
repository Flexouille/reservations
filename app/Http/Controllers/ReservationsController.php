<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = [
            "Disney's Hotel New York - The Art of Marvel",
            "Disney's Newport Bay Club",
            "Disney's Sequoia Lodge",
            "Disney's Hotel Cheyenne",
            "Disney's Hotel Santa Fe",
            "Villages Nature® Paris by Center Parcs",
            "Disney's Davy Crockett Ranch",
            "Dream Castle Fabulous Hotels Group",
            "Magic Circus Fabulous Hotels Group",
            "Radisson Blu Hotel Paris, Marne-la-Vallée",
            "Adagio Marne-la-Vallée Val d'Europe",
            "Explorers Fabulous Hotels Group",
            "Campanile Val de France",
            "Hôtel l’Elysée Val d’Europe",
            "B&B Hôtel",
        ];
        return view('pages.reservations.add', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        $validated = $request->validated();
        $reservation = new Reservations($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
