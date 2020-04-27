<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Genre extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'genres';

    protected $fillable = [
        'name'
    ];

    public static function getGenres($id)
    {
        $genres = Genre::Join('game_genres', 'genres.id', '=', 'game_genres.genres_id')
            ->join('games', 'games.id', '=', 'game_genres.games_id')
            ->where('games.id', $id)
            ->select('genres.name')->get();
        return $genres;
    }
}
