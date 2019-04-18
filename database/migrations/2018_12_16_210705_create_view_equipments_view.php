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
            CREATE OR REPLACE VIEW view_equipments (id, label, internalId, size, hexaColor, statusLabel, adultPrice, childrenPrice) AS 
            SELECT e.id, c.label, e.internalId, e.size, s.hexaColor, s.label, c.adultPrice, c.childrenPrice
            FROM categories c, equipments e, status s 
            WHERE e.categoryId = c.id AND e.statusId = s.id;"
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
