<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:37:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rent
 * 
 * @property int $id
 * @property string $userName
 * @property int $settled
 * @property string $localization
 * @property \Carbon\Carbon $start
 * @property \Carbon\Carbon $end
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Rent extends Eloquent
{
	protected $casts = [
		'settled' => 'int'
	];

	protected $dates = [
		'start',
		'end'
	];

	protected $fillable = [
		'userName',
		'settled',
		'localization',
		'start',
		'end'
	];
}
