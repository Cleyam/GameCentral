<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Platformer'
        ]);
        DB::table('genres')->insert([
            'name' => 'Shooter'
        ]);
        DB::table('genres')->insert([
            'name' => 'Fighting'
        ]);
        DB::table('genres')->insert([
            'name' => 'Beat-em up'
        ]);
        DB::table('genres')->insert([
            'name' => 'Stealth'
        ]);
        DB::table('genres')->insert([
            'name' => 'Survival'
        ]);
        DB::table('genres')->insert([
            'name' => 'Rythm'
        ]);
        DB::table('genres')->insert([
            'name' => 'Survival horror'
        ]);
        DB::table('genres')->insert([
            'name' => 'Metroidvania'
        ]);
        DB::table('genres')->insert([
            'name' => 'Text adventure'
        ]);
        DB::table('genres')->insert([
            'name' => 'Graphic adventure'
        ]);
        DB::table('genres')->insert([
            'name' => 'Visual novel'
        ]);
        DB::table('genres')->insert([
            'name' => 'Interactive movie'
        ]);
        DB::table('genres')->insert([
            'name' => 'Real-time 3D'
        ]);
        DB::table('genres')->insert([
            'name' => 'Action RPG'
        ]);
        DB::table('genres')->insert([
            'name' => 'MMORPG'
        ]);
        DB::table('genres')->insert([
            'name' => 'Roguelike'
        ]);
        DB::table('genres')->insert([
            'name' => 'Tactical RPG'
        ]);
        DB::table('genres')->insert([
            'name' => 'Sandbox'
        ]);
        DB::table('genres')->insert([
            'name' => 'First-person party-based RPG'
        ]);
        DB::table('genres')->insert([
            'name' => 'Construction & Management simulation'
        ]);
        DB::table('genres')->insert([
            'name' => 'Life simulation'
        ]);
        DB::table('genres')->insert([
            'name' => 'Vehicule simulation'
        ]);
        DB::table('genres')->insert([
            'name' => '4X'
        ]);
        DB::table('genres')->insert([
            'name' => 'Artillery'
        ]);
        DB::table('genres')->insert([
            'name' => 'Real-time strategy'
        ]);
        DB::table('genres')->insert([
            'name' => 'Teal-time tactics'
        ]);
        DB::table('genres')->insert([
            'name' => 'Multiplayer online battle arena'
        ]);
        DB::table('genres')->insert([
            'name' => 'Tower defense'
        ]);
        DB::table('genres')->insert([
            'name' => 'Turn-based strategy'
        ]);
        DB::table('genres')->insert([
            'name' => 'Turn-based tactics'
        ]);
        DB::table('genres')->insert([
            'name' => 'Wargame'
        ]);
        DB::table('genres')->insert([
            'name' => 'Grand strategy wargame'
        ]);
        DB::table('genres')->insert([
            'name' => 'Racing'
        ]);
        DB::table('genres')->insert([
            'name' => 'Team sports'
        ]);
        DB::table('genres')->insert([
            'name' => 'Competitive'
        ]);
        DB::table('genres')->insert([
            'name' => 'Sports-based fighting'
        ]);
        DB::table('genres')->insert([
            'name' => 'Logic game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Trivia game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Idle gaming'
        ]);
        DB::table('genres')->insert([
            'name' => 'Casual game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Party game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Programming game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Board / Card game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Massive multiplayer online'
        ]);
        DB::table('genres')->insert([
            'name' => 'Advergame'
        ]);
        DB::table('genres')->insert([
            'name' => 'Art game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Educational game'
        ]);
        DB::table('genres')->insert([
            'name' => 'Exergame'
        ]);
    }
}
