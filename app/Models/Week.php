<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:36:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Week
 * 
 * @property int $weekNumber
 * @property \Carbon\Carbon $startDate
 * @property \Carbon\Carbon $endDate
 *
 * @package App\Models
 */
class Week extends Eloquent
{
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

	protected $fillable = [
		'startDate',
		'endDate'
	];
}
