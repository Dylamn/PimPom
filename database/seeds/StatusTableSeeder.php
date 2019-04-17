<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'label' => 'Disponible',
            'hexaColor' => '#195C93', // Blue
        ]);

        DB::table('status')->insert([
            'label' => 'Réservé',
            'hexaColor' => '#FFA500', // Orange
        ]);

        DB::table('status')->insert([
            'label' => 'Réparation',
            'hexaColor' => '#E60000 ', // Red
        ]);
    }
}
