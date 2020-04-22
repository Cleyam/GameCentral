<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'reference' => '',
            'dateRelease' => '',
            'stock' => '',
            'synopsis' => '',
            'miniature' => '',
        ]);
        DB::table('games')->insert([
            'reference' => '',
            'dateRelease' => '',
            'stock' => 1,
            'synopsis' => 'The Elder Scrolls V : Skyrim est le cinquième épisode de la saga de jeux de rôle du même nom. Le scénario se passe 200 ans après l\'histoire du quatrième opus, quand Alduin fait son retour au milieu d\'une guerre civile. Seul le Dovahkiin, incarné par le joueur, peut mettre un terme à cette sombre affaire... Un monde gigantesque empli de quêtes est à explorer et auquel se sont rajoutées des extensions débloquant plus de quêtes.',
            'miniature' => 'http://image.jeuxvideo.com/medias-sm/147066/1470660830-3065-jaquette-avant.jpg',
        ]);
    }
}
