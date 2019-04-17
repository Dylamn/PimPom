<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaquetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_1',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_2',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_3',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_4',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_5',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_6',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 5,
            'internalId' => 'RAQ_7',
            'size' => '100',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
