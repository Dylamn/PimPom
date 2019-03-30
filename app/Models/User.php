<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:36:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $surname
 * @property string $firstName
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $remember_token
 * @property int $privilege
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $casts = [
		'privilege' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'surname',
		'firstName',
		'email',
		'username',
		'password',
		'remember_token',
		'privilege'
	];
}
