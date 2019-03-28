<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rents extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomClient',
    ];

    public static function allRents()
    {
        return DB::select("SELECT * FROM view_all_rents;");
    }
}
