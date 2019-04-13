<?php

namespace App\Models;

class User extends Base\User
{
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
	protected $hidden = [
		'password',
		'remember_token'
	];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'surname',
		'firstName',
		'email',
		'username',
		'password',
	];
}
