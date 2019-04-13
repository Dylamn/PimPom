<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
           'label' => 'disponible',
            'hexaColor' => '#00ff00',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00'
        ]);

        DB::table('status')->insert([
            'label' => 'réparation',
            'hexaColor' => '#ff0000',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00'
        ]);

        DB::table('status')->insert([
            'label' => 'louer',
            'hexaColor' => '#ffff00',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00'
        ]);
    }
}
