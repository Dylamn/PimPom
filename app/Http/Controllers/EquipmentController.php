<?php

namespace App\Http\Controllers;

use App\Http\Model\Equipments;
use App\Http\Requests\EquipmentRequest;
use Illuminate\Http\Request;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipements = Equipments::getAllEquipments();
        $ski = Equipments::getAllSki();
        $snow = Equipments::getAllSnow();
        $luge = Equipments::getAllLuge();
        $weed = Equipments::getAllWeed();

        return view('equipement.index', compact('ski', 'snow', 'luge', 'weed', 'equipements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipement = new Equipments();

        $equipement->internalId = $request->internalId;
        $equipement->size = $request->size;

        // ToDo : Insertions SQL dans les tables catégories & équipements
        // Vérifier si catégorie est vide ? ne rien faire : ajouter la nouvelle catégorie

        return redirect('/equipements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipments $equipement)
    {
        $equipement = Equipments::getOneEquipment($equipement->id)[0];

        return view('equipement.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipments $equipement)
    {
        $equipement = Equipments::getOneEquipment($equipement->id)[0];

        return view("equipement.edit", compact("equipement"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EquipmentRequest $request
     * @param  \App\Http\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentRequest $request, Equipments $equipement)
    {
        $equipement->internalId = $request->internalId;
        $equipement->size = $request->size;

        $equipement->save();
        // ToDo : Question -> Le prix par catégorie ou par équipements ?

        return redirect('/equipements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Equipments $equipement)
    {
        $equipement->delete();

        return redirect('/equipements');
    }
}
