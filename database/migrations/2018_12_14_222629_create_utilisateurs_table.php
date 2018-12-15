<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilisateurs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 20)->nullable();
			$table->string('prenom', 20)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('identifiant', 20)->nullable();
			$table->string('mdp', 50)->nullable();
			$table->integer('niveau')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utilisateurs');
	}

}
