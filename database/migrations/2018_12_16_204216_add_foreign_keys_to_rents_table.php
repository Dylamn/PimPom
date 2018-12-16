<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rents', function(Blueprint $table)
        {
            $table->foreign('startWeek', 'fkStartDate')->references('weekNumber')->on('weeks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('endWeek', 'fkEndDate')->references('weekNumber')->on('weeks')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rents', function(Blueprint $table)
        {
            $table->dropForeign('fkStartDate');
            $table->dropForeign('fkEndDate');
        });
    }
}
