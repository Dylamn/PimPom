<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipements', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('idInterne', 5);
			$table->string('taille', 5);
			$table->integer('idCategorie')->index('ceCategorie');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipements');
	}

}
