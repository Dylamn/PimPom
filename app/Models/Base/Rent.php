<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 21:29:40 +0000.
 */

namespace App\Models\Base;

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
 * @package App\Models\Base
 */
class Rent extends Eloquent
{
	protected $table = 'rezaski.rents';

	protected $casts = [
		'settled' => 'int'
	];

	protected $dates = [
		'start',
		'end'
	];
}
