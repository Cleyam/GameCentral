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

    // Eloquent Relationships
    public function genres()
    {
        return $this->belongsToMany('App\Genre', 'game_genres', 'games_id', 'genres_id');
    }

    public function developers()
    {
        return $this->belongsToMany('App\Developer', 'game_developers', 'games_id', 'developers_id');
    }

    public function platforms()
    {
        return $this->belongsToMany('App\Platform', 'game_platforms', 'games_id', 'platforms_id');
    }

    // Methods
    public static function getGames()
    {
        $games = Game::where('games.deleted_at', null)
            ->with('genres')
            ->with('developers')
            ->with('platforms')
            ->select('*')
            ->get();

        return $games;
    }
}
