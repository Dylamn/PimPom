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
            SkiSeeder::class,
        ]);
    }
}
