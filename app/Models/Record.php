<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Record extends Base\Record
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName',
        'settled',
        'localization',
        'start',
        'end'
    ];

    public static function getRentsByName(String $name)
    {
        // TODO : Régler le problème lié à l'utilisation de l'ORM
        return DB::select("SELECT * FROM rents WHERE userName = '$name'");

        // return DB::table('rents')->select('*')->where('userName', '=', $name);
    }
}
