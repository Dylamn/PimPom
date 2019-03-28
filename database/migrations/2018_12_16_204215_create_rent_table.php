<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rent', function(Blueprint $table)
		{
			$table->integer('rentalId');
			$table->integer('equipmentId')->index('fkEquipement');
			$table->primary(['rentalId','equipmentId']);
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
		Schema::drop('rent');
	}
}
