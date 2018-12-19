<?php

namespace App\Http\Controllers;

use App\Model\Reserver;
use App\Model\Equipments;
use Illuminate\Http\Request;

class ReserverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ski = Equipments::getAllSki();
        $snow = Equipments::getAllSnow();
        $luge = Equipments::getAllLuge();
        $weedze = Equipments::getAllWeedze();
        $shoes = Equipments::getAllShoes();
        return view('reserver.index', compact('ski', 'snow', 'luge', 'weedze', 'equipements', 'shoes'));
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
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Reserver  $reserver
     * @return \Illuminate\Http\Response
     */
    public function show(Reserver $reserver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Reserver  $reserver
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserver $reserver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reserver  $reserver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserver $reserver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reserver  $reserver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserver $reserver)
    {
        //
    }
}
