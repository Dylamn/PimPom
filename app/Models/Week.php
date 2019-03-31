<?php

namespace App\Models;

class Week extends Base\Week
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'startDate',
		'endDate'
	];
}
