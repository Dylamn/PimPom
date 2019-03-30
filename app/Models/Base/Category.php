<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Mar 2019 01:39:35 +0000.
 */

namespace App\Models\Base;

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
 * @package App\Models\Base
 */
class Category extends Eloquent
{
	protected $casts = [
		'adultPrice' => 'float',
		'childrenPrice' => 'float'
	];
}
