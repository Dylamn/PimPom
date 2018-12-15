<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('locations', function(Blueprint $table)
		{
			$table->foreign('semDebut', 'ceDateDebut')->references('numeroSemaine')->on('semaines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('semFin', 'ceDateFin')->references('numeroSemaine')->on('semaines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('locations', function(Blueprint $table)
		{
			$table->dropForeign('ceDateDebut');
			$table->dropForeign('ceDateFin');
		});
	}

}
