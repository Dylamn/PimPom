<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'libelle' => 'Disponible',
            'hexaColor' => '#0000FF',
        ]);
        DB::table('status')->insert([
            'libelle' => 'Réservé',
            'hexaColor' => '#FFA500',
        ]);
        DB::table('status')->insert([
            'libelle' => 'Réparation',
            'hexaColor' => '#FF0000',
        ]);
    }
}
