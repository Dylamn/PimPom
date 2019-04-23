<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('surname', 20)->nullable();
			$table->string('firstName', 20)->nullable();
			$table->string('email', 50)->unique();
			$table->string('username', 20)->unique();
			$table->string('password', 60)->nullable();
            $table->rememberToken();
			$table->integer('privilege')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
