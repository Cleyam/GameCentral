<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'reference' => 'The Elder Scrolls V : Skyrim',
            'dateRelease' => '2011-11-11',
            'stock' => 1,
            'synopsis' => 'The Elder Scrolls V : Skyrim est le cinquième épisode de la saga de jeux de rôle du même nom. Le scénario se passe 200 ans après l\'histoire du quatrième opus, quand Alduin fait son retour au milieu d\'une guerre civile. Seul le Dovahkiin, incarné par le joueur, peut mettre un terme à cette sombre affaire... Un monde gigantesque empli de quêtes est à explorer et auquel se sont rajoutées des extensions débloquant plus de quêtes.',
            'miniature' => 'http://image.jeuxvideo.com/medias-sm/147066/1470660830-3065-jaquette-avant.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'Call of Duty : Black Ops',
            'dateRelease' => '2010-11-09',
            'stock' => 1,
            'synopsis' => 'Call of Duty : Black Ops est un FPS grand spectacle sur PC qui nous entraîne en 1968 et nous permet de vivre, par l\'intermédiaire de flash-back, les pérégrinations d\'un soldat américain en pleine guerre froide. Du Vietnam à la Russie en passant par Cuba, le jeu enchaîne les situations de combat et offre une mise en scène calquée sur celle des grands films de guerre hollywoodiens. Le jeu propose également un mode multijoueur complet, un mode Zombies et de nombreux bonus à débloquer.',
            'miniature' => 'http://image.jeuxvideo.com/images-sm/jaquettes/00034819/jaquette-call-of-duty-black-ops-pc-cover-avant-g.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'CupHead',
            'dateRelease' => '2017-09-29',
            'stock' => 1,
            'synopsis' => 'Cuphead est un jeu d\'action 2D où vous incarnez Cuphead ou Mugman. Évoluez dans un univers inspiré par les cartoons des années 1930 et traversez d\'étranges mondes pour obtenir de nouvelles armes, apprendre de nouvelles attaques et découvrir des secrets dans ce shoot\'em up nerveux.',
            'miniature' => 'http://image.jeuxvideo.com/medias-sm/149751/1497514958-4620-jaquette-avant.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'Dark Souls',
            'dateRelease' => '2011-10-07',
            'stock' => 1,
            'synopsis' => 'Dark Souls est un action-RPG réservé aux amateurs de challenge et de difficulté extrême. Le joueur doit faire évoluer son personnage au milieu de niveaux labyrinthiques truffés de pièges et d\'ennemis particulièrement puissants et vicieux.',
            'miniature' => 'http://image.jeuxvideo.com/images-sm/jaquettes/00044419/jaquette-dark-souls-prepare-to-die-edition-pc-cover-avant-g-1334175806.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'God of War',
            'dateRelease' => '2018-04-20',
            'stock' => 1,
            'synopsis' => 'Dans ce nouvel épisode de God Of War, le héros évoluera dans un monde aux inspirations nordiques, très forestier et montagneux. Dans ce beat-them-all, un enfant accompagnera le héros principal, pouvant apprendre des actions du joueur, et même gagner de l\'expérience.',
            'miniature' => 'http://image.jeuxvideo.com/medias-sm/151689/1516893501-9622-jaquette-avant.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'Grand Theft Auto V',
            'dateRelease' => '2013-09-17',
            'stock' => 1,
            'synopsis' => 'Jeu d\'action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin. Ces derniers ont élu domicile à Los Santos, ville de la région de San Andreas. Braquages et missions font partie du quotidien du joueur qui pourra également cohabiter avec 15 autres utilisateurs dans cet univers persistant s\'il joue sur PS3/Xbox 360 ou 29 s\'il joue sur PS4/Xbox One/PC.',
            'miniature' => 'http://image.jeuxvideo.com/images-sm/jaquettes/00034710/jaquette-grand-theft-auto-v-pc-cover-avant-g-1415122060.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert([
            'reference' => 'Minecraft',
            'dateRelease' => '2011-11-18',
            'stock' => 1,
            'synopsis' => 'Jeu bac à sable indépendant et pixelisé dont le monde infini est généré aléatoirement, Minecraft permet au joueur de récolter divers matériaux, d\'élever des animaux et de modifier le terrain selon ses choix, en solo ou en multi (via des serveurs). Il doit également survivre en se procurant de la nourriture et en se protégeant des monstres qui apparaissent la nuit et dans des donjons. Il peut également monter de niveau afin d\'acheter des enchantements.',
            'miniature' => 'http://image.jeuxvideo.com/medias-sm/148285/1482845269-1018-jaquette-avant.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
