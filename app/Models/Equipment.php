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
		'statusId'
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
            $arr = array();

            for ($i = 0; $i < count($data); $i++)
            {
                if ($oneCat->label === $data[$i]->label)
                {
                    array_push($arr, $data[$i]);
                }
            }
            $all[$oneCat->label] = $arr;
        }

        return $all;
    }
}
