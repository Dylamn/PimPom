<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 21:29:40 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Equipment
 * 
 * @property int $id
 * @property string $internalId
 * @property string $size
 * @property int $categoryId
 * @property int $statusId
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Equipment extends Eloquent
{
	protected $table = 'rezaski.equipments';

	protected $casts = [
		'categoryId' => 'int',
		'statusId' => 'int'
	];
}
