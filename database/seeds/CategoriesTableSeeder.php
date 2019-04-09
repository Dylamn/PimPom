<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'label' => 'Snowboard',
            'adultPrice' => '60',
            'childrenPrice' => '30',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'Ski',
            'adultPrice' => '60',
            'childrenPrice' => '30',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'Luge',
            'adultPrice' => '60',
            'childrenPrice' => '30',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'WeedzeSeeder',
            'adultPrice' => '60',
            'childrenPrice' => '30',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
