<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipement extends Model
{
    public function getAllEquipments()
    {
        DB::select("SELECT libelle FROM categorie");
    }
}
