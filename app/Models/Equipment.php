<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:36:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Equipment
 * 
 * @property int $id
 * @property string $internalId
 * @property string $size
 * @property int $categoryId
 * @property int $use
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Equipment extends Eloquent
{
	protected $table = 'equipments';

	protected $casts = [
		'categoryId' => 'int',
		'use' => 'int'
	];

	protected $fillable = [
		'internalId',
		'size',
		'categoryId',
		'use'
	];
}
