<?php

namespace App\Models;

class Record extends Base\Record
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName',
        'settled',
        'localization',
        'start',
        'end'
    ];
}
