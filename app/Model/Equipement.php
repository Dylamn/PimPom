<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipement extends Model
{
    public static function getAllEquipements()
    {
        return DB::select("SELECT * FROM vue_equipments;");
    }

    public static function getOneEquipement(int $id)
    {
        return DB::select("SELECT * FROM vue_equipments WHERE id = ?;", [$id]);
    }
}
