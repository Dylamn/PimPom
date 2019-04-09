<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WeedzeSeeder::class,
            SnowboardSeeder::class,
            LugeSeeder::class,
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 2,
            'internalId' => 'SK1',
            'size' => '165',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 2,
            'internalId' => 'SK2',
            'size' => '158',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 2,
            'internalId' => 'SK3',
            'size' => '170',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('equipments')->insert([
            'categoryId' => 4,
            'internalId' => 'CH1',
            'size' => '40',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
