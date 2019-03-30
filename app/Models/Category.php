<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:36:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $label
 * @property float $adultPrice
 * @property float $childrenPrice
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $casts = [
		'adultPrice' => 'float',
		'childrenPrice' => 'float'
	];

	protected $fillable = [
		'label',
		'adultPrice',
		'childrenPrice'
	];
}
