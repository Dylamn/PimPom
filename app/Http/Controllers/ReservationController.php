<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Rented;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Rent::all();
        return view('Rented.index', compact('all'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rented  $rented
     * @return \Illuminate\Http\Response
     */
    public function show(Rented $rented)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rented  $rented
     * @return \Illuminate\Http\Response
     */
    public function edit(Rented $rented)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rented  $rented
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rented $rented)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rented $rented
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Rented $rented)
    {
        $rented->delete();

        return redirect(route(''));
    }
}
