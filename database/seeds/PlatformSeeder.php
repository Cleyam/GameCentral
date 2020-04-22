<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            'name' => 'PC'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Mac'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Linux'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Mobile - Android'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Mobile - IOS'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Microsoft - Xbox 360'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Microsoft - Xbox One'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Microsoft - Xbox'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Sony - Playstation'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Sony - Playstation 2'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Sony - Playstation 3'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Sony - Playstation 4'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - GameBoy'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - Gameboy Advance'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - Switch'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - Wii'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - Wii U'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - DS'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintedo - GameBoy Color'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Nintendo - Nintendo 3DS'
        ]);
    }
}
