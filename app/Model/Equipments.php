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
     * Retrieve all equipments from the view.
     *
     * @return array
     */
    public static function getAllEquipments()
    {
        return DB::select("SELECT * FROM view_equipments;");
    }

    public static function getCountEquipment()
    {
        return DB::select("SELECT * FROM view_count_equipments;");
    }

    /**
     * Retrieve a requested equipment from the view.
     *
     * @param int $id
     * @return array
     */
    public static function getOneEquipment(int $id)
    {
        return DB::select("SELECT * FROM view_equipments WHERE id = ?;", [$id]);
    }
}
