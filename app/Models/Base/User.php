<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 22:18:03 +0000.
 */

namespace App\Models\Base;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
class User extends Authenticatable
{
    use Notifiable;

	protected $table = 'rezaski.users';

	protected $casts = [
		'privilege' => 'int'
	];
}
