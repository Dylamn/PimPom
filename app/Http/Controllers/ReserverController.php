<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rented;
use App\Models\Equipment;
use App\Models\Rent;
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
        $equipment = Equipment::getCountEquipment();
        $categorie = Category::all('label');

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
        $data = new Rent;
        $data->userName = $request->nomClient;
        $data->localization = 'France - Rennes';
        $data->start = $request->dateDebut;
        $data->end = $request->dateFin;
        $data->save();
        //echo($data->id);
        $allSnow = Equipment::all();

        $j = 0;
        if ($request->nbrSnowboard > 0) {
            for ($i = 0; $i <= sizeof($allSnow); $i++) {
                if ($request->nbrSnowboard > $j) {
                    if ($allSnow[$i]->label == 'Snowboard') {
                        DB::insert('INSERT INTO rent (rentalId, equipmentId) VALUES (' . $data->id . ', ' . $allSnow[$i]->id . ');');
                        Equipment::where('id', $data->id)->update(['use' => 1]);
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
                        Equipment::where('id', $data->id)->update(['use' => 1]);
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
                        Equipment::where('id', $data->id)->update(['use' => 1]);
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
     * @param  \App\Models\Rented $rented
     * @return \Illuminate\Http\Response
     */
    public function show(Rented $rented)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rented $rented
     * @return \Illuminate\Http\Response
     */
    public function edit(Rented $rented)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Rented $rented
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
     */
    public function destroy(Rented $rented)
    {
        //
    }

    public function confirmation(Request $request)
    {
        return 'test';
    }
}
