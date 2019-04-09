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
            'internalId' => 'SK_150A',
            'size' => '150',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_155A',
            'size' => '155',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_155B',
            'size' => '155',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_155C',
            'size' => '155',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_160A',
            'size' => '160',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_160B',
            'size' => '160',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_160C',
            'size' => '160',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_162A',
            'size' => '162',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 1,
            'internalId' => 'SK_162B',
            'size' => '162',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
