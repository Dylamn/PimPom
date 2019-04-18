<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            'userName' => 'Johnny',
            'settled' => 0,
            'localization' => 'Rennes',
            'start' => '2019-04-22 00:00:00',
            'end' => '2019-04-28 00:00:00',
            'created_at' => '2019-04-17 23:48:00',
            'updated_at' => '2019-04-17 23:48:00'
        ]);

        DB::table('rents')->insert([
            'userName' => 'Anna',
            'settled' => 1,
            'localization' => 'Rennes',
            'start' => '2019-04-22 00:00:00',
            'end' => '2019-04-28 00:00:00',
            'created_at' => '2019-04-17 23:48:00',
            'updated_at' => '2019-04-17 23:48:00'
        ]);

        DB::table('rents')->insert([
            'userName' => 'Jack',
            'settled' => 1,
            'localization' => 'Rennes',
            'start' => '2019-04-15 00:00:00',
            'end' => '2019-04-22 00:00:00',
            'created_at' => '2019-04-17 23:48:00',
            'updated_at' => '2019-04-17 23:48:00'
        ]);

        DB::table('rents')->insert([
            'userName' => 'Chloé',
            'settled' => 1,
            'localization' => 'Rennes',
            'start' => '2019-04-22 00:00:00',
            'end' => '2019-04-28 00:00:00',
            'created_at' => '2019-04-17 23:48:00',
            'updated_at' => '2019-04-17 23:48:00'
        ]);
    }
}
