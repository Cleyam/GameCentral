<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Genre;

class Game extends Model
{

    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference', 'dateRelease', 'stock', 'synopsis', 'miniature'
    ];
    protected $genres;

    public function setGenre()
    {
        $this->genres = Genre::getGenres($this->id);
    }

    public static function getGames()
    {
        $games = Game::where('games.deleted_at', null)
            // ->join('game_genres', 'games.id', '=', 'game_genres.games_id')
            // ->join('genres', 'genres.id', '=', 'game_genres.genres_id')
            // ->join('game_developers', 'games.id', '=', 'game_developers.games_id')
            // ->join('developers', 'developers.id', '=', 'game_developers.developers_id')
            ->select('*')

            ->get();

        return $games;
    }
}
