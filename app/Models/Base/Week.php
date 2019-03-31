<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 22:18:03 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Week
 * 
 * @property int $weekNumber
 * @property \Carbon\Carbon $startDate
 * @property \Carbon\Carbon $endDate
 *
 * @package App\Models\Base
 */
class Week extends Eloquent
{
	protected $table = 'rezaski.weeks';
	protected $primaryKey = 'weekNumber';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'weekNumber' => 'int'
	];

	protected $dates = [
		'startDate',
		'endDate'
	];
}
