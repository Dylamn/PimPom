<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             CategoriesTableSeeder::class,
             EquipmentsTableSeeder::class,
             StatusTableSeeder::class,
             RentsTableSeeder::class,
         ]);
    }
}
