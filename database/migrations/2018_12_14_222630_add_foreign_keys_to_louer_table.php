<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLouerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('louer', function(Blueprint $table)
		{
			$table->foreign('idEquip', 'ceEquipement')->references('id')->on('equipements')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idLocation', 'ceLocation')->references('id')->on('locations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('louer', function(Blueprint $table)
		{
			$table->dropForeign('ceEquipement');
			$table->dropForeign('ceLocation');
		});
	}

}
