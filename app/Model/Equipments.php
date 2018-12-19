<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipments extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @return
     */
    public static function getAllEquipments()
    {
        return dd(DB::select("SELECT * FROM view_equipments;"));
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

    public static function getAllWeedze()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Weedze';");
    }

    public static function getAllShoes()
    {
        return DB::select("SELECT * FROM view_equipments WHERE label = 'Shoes';");
    }
}
