<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Rent extends Base\Rent
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
        return Rent::where('username', '=', $name)->get();
    }
}
