<?php

namespace App\Models;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;

class Rented extends Base\Rented
{
    use HasCompositePrimaryKey;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['rentalId', 'equipmentId'];
}
