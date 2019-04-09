<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LugeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_A',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_B',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_C',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_D',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_E',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_F',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_G',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_H',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_I',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 3,
            'internalId' => 'LU_J',
            'size' => '100',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

    }
}
