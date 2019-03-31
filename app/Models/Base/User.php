<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 22:18:03 +0000.
 */

namespace App\Models\Base;

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
 * @package App\Models\Base
 */
class User extends Eloquent
{
	protected $table = 'rezaski.users';

	protected $casts = [
		'privilege' => 'int'
	];
}
