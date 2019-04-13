<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 21:29:41 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $label
 * @property string $hexaColor
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Status extends Eloquent
{
	protected $table = 'rezaski.status';
}
