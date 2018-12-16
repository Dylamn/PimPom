<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewEquipmentsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select("
            CREATE OR REPLACE VIEW view_equipments (id, label, internalId, size, adultPrice, childrenPrice) AS 
            SELECT equipments.id, label, internalId, size, adultPrice, childrenPrice 
            FROM categories, equipments 
            WHERE equipments.categoryId = categories.id;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select("DROP VIEW view_equipments;");
    }
}
