<?php

namespace App\Http\Controllers;

use App\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    public function getInfos(Equipement $equipement)
    {
        $stock = $equipement->getAllEquipments();

        return view('equipement/equipement', compact('stock'));
    }
}
