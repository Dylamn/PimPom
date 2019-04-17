<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnowboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_150A',
            'size' => '150',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_155A',
            'size' => '155',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_155B',
            'size' => '155',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_155C',
            'size' => '155',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_160A',
            'size' => '160',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_160B',
            'size' => '160',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_160C',
            'size' => '160',
            'statusId' => 3,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_162A',
            'size' => '162',
            'statusId' => 1,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SN_162B',
            'size' => '162',
            'statusId' => 3,
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
