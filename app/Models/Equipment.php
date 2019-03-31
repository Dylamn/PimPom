<?php

namespace App\Models;

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
}
