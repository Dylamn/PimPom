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
            'label' => 'Weedze',
            'adultPrice' => '60',
            'childrenPrice' => '30',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'Raquette',
            'adultPrice' => '30',
            'childrenPrice' => '15',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'Casque',
            'adultPrice' => '15',
            'childrenPrice' => '10',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);

        DB::table('categories')->insert([
            'label' => 'Chaussure',
            'adultPrice' => '0',
            'childrenPrice' => '0',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
