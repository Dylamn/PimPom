<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Equipments;
use App\Http\Requests\EquipmentRequest;
use Exception;
use DB;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ski = $this->bigData('Ski');

        $snow = $this->bigData('Snowboard');

        $luge = $this->bigData('Luge');

        $weedze = $this->bigData('Weedze');

        return view('equipement.index', compact('ski', 'snow', 'luge', 'weedze'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('equipement.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Equipments::create(request(['internalId', 'size', 'categoryId']));

        return redirect(route('equipements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Equipments $equipement
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
     * @param  \App\Model\Equipments $equipement
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
     * @param  \App\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentRequest $request, Equipments $equipement)
    {
        $equipement->update([
            'categoryId' => $request->categoryId,
            'internalId' => $request->internalId,
            'size' => $request->size,
        ]);

        return redirect(route('equipements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Equipments $equipement
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(Equipments $equipement) : \Illuminate\Http\Response
    {
        $equipement->delete();

        return redirect(route('equipements.index'));
    }

    /**
     * Function that returns a table for the requested equipment.
     *
     * @param String $label
     * @return object
     */
    public static function bigData($label)
    {
        if ($label === 'all') {
            $bigTable = Equipments::select('*')
                ->join('categories AS c', 'equipments.categoryId', '=', 'c.id')
                ->get();
        } else {
            $bigTable = Equipments::select('*')
                ->join('categories AS c', 'equipments.categoryId', '=', 'c.id')
                ->where('c.label', $label)->get();
        }

        return $bigTable;
    }
}
