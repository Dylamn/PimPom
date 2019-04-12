<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'surname' => 'Snow',
            'firstName' => 'Jon',
            'email' => 'jon@snow.got',
            'username' => 'Jon',
            'password' => Hash::make('testtest'),
            'privilege' => '1',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
        DB::table('users')->insert([
            'surname' => 'Targaryen',
            'firstName' => 'Daenerys',
            'email' => 'mother@dragon.westeros',
            'username' => 'QueenOfDragon',
            'password' => Hash::make('admin'),
            'privilege' => '1',
            'created_at' => '2018-12-16 12:00:00',
            'updated_at' => '2018-12-16 12:00:00',
        ]);
    }
}
