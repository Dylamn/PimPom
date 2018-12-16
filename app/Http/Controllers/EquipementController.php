<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Equipement;
use App\Http\Requests\EquipementRequest;
use Illuminate\Http\Request;


class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ski = Equipement::getAllSki();
        $snow = Equipement::getAllSnow();
        $luge = Equipement::getAllLuge();
        $weed = Equipement::getAllWeed();

        return view('equipement.index', compact('ski', 'snow', 'luge', 'weed'));
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
        $equipement = new Equipement();

        $equipement->idInterne = $request->idInterne;
        $equipement->taille = $request->taille;

        // ToDo : Insertions SQL dans les tables catégories & équipements
        // Vérifier si catégorie est vide ? ne rien faire : ajouter la nouvelle catégorie

        return redirect('/equipements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipement $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        return view('equipement.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipement $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        $equipment = Equipement::getOneEquipement($equipement->id)[0];

        return view("equipement.edit", compact("equipment"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EquipementRequest $request
     * @param  \App\Equipement $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(EquipementRequest $request, Equipement $equipement)
    {
        $equipement->idInterne = $request->idInterne;
        $equipement->taille = $request->taille;

        $equipement->save();
        // ToDo : Question -> Le prix par catégorie ou par équipements ?

        return redirect('/equipements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipement $equipement
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Equipement $equipement)
    {
        $equipement->delete();

        return redirect('/equipements');
    }
}
