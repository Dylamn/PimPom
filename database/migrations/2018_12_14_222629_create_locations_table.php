<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('idUtilisateur')->nullable();
			$table->integer('reglee')->nullable()->default(0);
			$table->string('localisation', 20);
			$table->integer('semDebut')->nullable()->index('ceDateDebut');
			$table->integer('semFin')->nullable()->index('ceDateFin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
