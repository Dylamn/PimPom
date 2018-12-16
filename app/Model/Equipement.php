<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipement extends Model
{
    public static function getAllEquipments()
    {
        return DB::select("SELECT * FROM view_equipments;");
    }

    public static function getOneEquipment(int $id)
    {
        return DB::select("SELECT * FROM view_equipments WHERE id = ?;", [$id]);
    }

    public static function getAllSki()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Ski';");
    }

    public static function getAllSnow()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Snowboard';");
    }

    public static function getAllLuge()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Luge';");
    }

    public static function getAllWeed()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Weedze';");
    }
}
