<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueEquipementsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW vue_equipements (id, libelle, idInterne, taille, prixAdulte, prixEnfant)
            AS SELECT equipements.id, libelle, idInterne, taille, prixAdulte, prixEnfant FROM categories, equipements 
            WHERE equipements.idCategorie = categories.id;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW vue_equipements");
    }
}
