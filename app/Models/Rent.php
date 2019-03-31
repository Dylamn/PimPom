<?php

namespace App\Models;

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
}
