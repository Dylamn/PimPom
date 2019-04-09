<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Equipment extends Base\Equipment
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'use' => 'int'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'internalId',
		'size',
		'categoryId',
		'use'
	];

    public static function getCountEquipment()
    {
        return DB::select("SELECT * FROM view_count_equipments;");
    }
}
