<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Equipment;
use App\Http\Requests\EquipmentRequest;
use Exception;

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
        $categories = Category::all();

        return view('equipement.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Equipment::create(request([
            'internalId',
            'size',
            'categoryId'
        ]));

        return redirect(route('equipements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        $equipement = Equipment::getOneEquipment($equipment->id)[0];

        return view('equipement.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
       $equipement = Equipment::select('*')
           ->rightJoin('categories AS c', 'equipments.categoryId', '=', 'c.id')
           ->where('equipments.id', '=', $equipment->id)->get()[0];

        return view("equipement.edit", compact("equipement"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EquipmentRequest $request
     * @param  \App\Models\Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentRequest $request, Equipment $equipment)
    {
        $equipment->update([
            'internalId' => $request->internalId,
            'size' => $request->size,
        ]);

        return redirect(route('equipements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment $equipment
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

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
            $bigTable = Equipment::select('*')
                ->join('categories AS c', 'equipments.categoryId', '=', 'c.id')
                ->get();
        } else {
            $bigTable = Equipment::select('*')
                ->join('categories AS c', 'equipments.categoryId', '=', 'c.id')
                ->where('c.label', $label)->get();
        }

        return $bigTable;
    }
}
