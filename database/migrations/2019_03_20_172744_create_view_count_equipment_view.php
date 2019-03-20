<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewCountEquipmentView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select("
            CREATE OR REPLACE VIEW view_count_equipments (label, countEquipment) AS 
            SELECT label, COUNT(*) 
            FROM view_equipments 
            GROUP BY label;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select("DROP VIEW view_count_equipments;");
    }
}
