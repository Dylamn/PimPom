<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
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
