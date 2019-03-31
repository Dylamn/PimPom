<?php

namespace App\Models;

class Category extends Base\Category
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'label',
		'adultPrice',
		'childrenPrice'
	];
}
