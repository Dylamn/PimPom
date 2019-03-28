<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Reserver;
use App\Model\Equipments;
use App\Model\Rents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = Equipments::getCountEquipment();
        $categorie = Categorie::all('label');

        return view('reserver.index', compact('equipment', 'categorie'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$data = Rents::create(request(['userName' => 'nomClient', 0, '', 'dateDebut', 'dateFin']));
        $data = new Rents;
        $data->userName = $request->nomClient;
        $data->localization = '';
        $data->start = $request->dateDebut;
        $data->end = $request->dateFin;
        $data->save();
        //echo($data->id);
        $allSnow = Equipments::getAllEquipments();

        $j = 0;
        if ($request->nbrSnowboard > 0) {
            for ($i = 0; $i <= sizeof($allSnow); $i++) {
                if ($request->nbrSnowboard > $j) {
                    if ($allSnow[$i]->label == 'Snowboard') {
                        DB::insert('INSERT INTO rent (rentalId, equipmentId) VALUES (' . $data->id . ', ' . $allSnow[$i]->id . ');');
                        Equipments::where('id', $data->id)->update(['use' => 1]);
                        $j++;
                    }
                }
            }
        }
        $j = 0;
        if ($request->nbrSki > 0) {
            for ($i = 0; $i <= sizeof($allSnow); $i++) {
                if ($request->nbrSki > $j) {
                    if ($allSnow[$i]->label == 'Ski') {
                        DB::insert('INSERT INTO rent (rentalId, equipmentId) VALUES (' . $data->id . ', ' . $allSnow[$i]->id . ');');
                        Equipments::where('id', $data->id)->update(['use' => 1]);
                        $j++;
                    }
                }
            }
        }
        $j = 0;
        if ($request->nbrLuge > 0) {
            for ($i = 0; $i <= sizeof($allSnow); $i++) {
                if ($request->nbrLuge > $j) {
                    if ($allSnow[$i]->label == 'Luge') {
                        DB::insert('INSERT INTO rent (rentalId, equipmentId) VALUES (' . $data->id . ', ' . $allSnow[$i]->id . ');');
                        Equipments::where('id', $data->id)->update(['use' => 1]);
                        $j++;
                    }
                }
            }
        }
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Reserver $reserver
     * @return \Illuminate\Http\Response
     */
    public function show(Reserver $reserver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Reserver $reserver
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserver $reserver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Reserver $reserver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserver $reserver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reserver $reserver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserver $reserver)
    {
        //
    }

    public function confirmation(Request $request)
    {
        return 'test';
    }
}
