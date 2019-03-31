<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 22:18:03 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rented
 * 
 * @property int $rentalId
 * @property int $equipmentId
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Rented extends Eloquent
{
	protected $table = 'rezaski.rented';
	public $incrementing = false;

	protected $casts = [
		'rentalId' => 'int',
		'equipmentId' => 'int'
	];
}
