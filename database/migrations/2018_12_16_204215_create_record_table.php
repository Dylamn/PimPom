<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('userName')->nullable();
            //$table->integer('userId')->nullable();
            $table->integer('settled')->nullable()->default(0);
            $table->string('localization', 20);
            $table->dateTime('start')->nullable()->index('fkStartDate');
            $table->dateTime('end')->nullable()->index('fkEndDate');
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
        Schema::dropIfExists('record');
    }
}
