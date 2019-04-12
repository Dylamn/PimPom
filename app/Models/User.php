<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class User extends Base\User
{
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
	protected $hidden = [
		'password',
		'remember_token'
	];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'surname',
		'firstName',
		'email',
		'username',
		'password',
	];

	public function delete()
    {
        DB::table('users')->where('id', '=', $this->id)->delete();
    }
}
