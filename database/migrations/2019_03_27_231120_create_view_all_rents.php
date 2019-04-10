<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreateViewAllRents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select("
            CREATE OR REPLACE VIEW view_all_rents (id, userName, label, start, end) AS 
            SELECT rents.id, userName, internalId, start, end
            FROM equipments, rents, rented 
            WHERE equipments.id = equipmentId
            AND rents.id = rentalId;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select("DROP VIEW view_all_rents;");
    }
}
