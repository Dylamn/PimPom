<?php

namespace App\Models;

class Session extends Base\Session
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'user_id',
		'ip_address',
		'user_agent',
		'payload',
		'last_activity'
	];
}
