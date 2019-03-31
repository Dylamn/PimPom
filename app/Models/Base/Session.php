<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 22:18:03 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Session
 * 
 * @property string $id
 * @property int $user_id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $payload
 * @property int $last_activity
 *
 * @package App\Models\Base
 */
class Session extends Eloquent
{
	protected $table = 'rezaski.sessions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'last_activity' => 'int'
	];
}
