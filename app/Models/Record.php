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

    public static function getRecordByName(String $name)
    {
        return Record::where('username', '=', $name)->get();
    }
}
