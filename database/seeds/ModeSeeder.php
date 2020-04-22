<?php

use Illuminate\Database\Seeder;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modes')->insert([
            'name' => 'Solo'
        ]);
        DB::table('modes')->insert([
            'name' => 'Local Multiplayer'
        ]);
        DB::table('modes')->insert([
            'name' => 'Online Multiplayer'
        ]);
    }
}
