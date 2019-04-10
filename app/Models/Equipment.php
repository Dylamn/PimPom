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

    public static function getAllEquipment()
    {
        return DB::select("SELECT * FROM view_equipments");
    }

    public static function getEquipment()
    {
        $all = array();
        $cat = DB::table('categories')->select('label')->get();
        $data = DB::select("SELECT * FROM view_equipments");
        foreach ($cat as $oneCat)
        {
            $i = 0;
            for ($i; $i < count($data); $i++)
            {
                if ($oneCat->label === $data[$i]->label)
                {
                    $all[$oneCat->label][$i] = ($data[$i]);
                }
            }
        }

        return $all;
    }
}