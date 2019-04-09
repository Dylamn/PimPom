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
            'size' => '180',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
