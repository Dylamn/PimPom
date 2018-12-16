<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rent', function(Blueprint $table)
		{
			$table->foreign('equipmentId', 'fkEquipment')->references('id')->on('equipments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rentalId', 'fkRent')->references('id')->on('rents')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rent', function(Blueprint $table)
		{
			$table->dropForeign('fkEquipment');
			$table->dropForeign('fkRent');
		});
	}
}
