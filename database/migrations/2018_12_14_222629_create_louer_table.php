<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLouerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('louer', function(Blueprint $table)
		{
			$table->integer('idLocation');
			$table->integer('idEquip')->index('ceEquipement');
			$table->primary(['idLocation','idEquip']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('louer');
	}

}
