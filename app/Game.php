<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\AdminGameRequest;

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

    public function modes()
    {
        return $this->belongsToMany('App\Mode', 'game_modes', 'games_id', 'modes_id');
    }

    // Methods
    public static function getGames()
    {
        $games = Game::where('games.deleted_at', null)
            ->with('genres')
            ->with('developers')
            ->with('platforms')
            ->with('modes')
            ->select('*')
            ->get();

        return $games;
    }

    public static function deleteGame($id)
    {
        $deleteGame = Game::where('deleted_at', null)->where('id', $id)->delete();
        return $deleteGame;
    }

    public static function getGame($id)
    {
        $game = Game::where('deleted_at', null)
            ->where('id', $id)
            ->with('genres')
            ->with('developers')
            ->with('platforms')
            ->with('modes')
            ->select('*')
            ->first();
        return $game;
    }

    public static function updateGame(AdminGameRequest $request, $id)
    {
        Game::find($id)->genres()->detach();
        Game::find($id)->modes()->detach();
        Game::find($id)->developers()->detach();
        Game::find($id)->platforms()->detach();
        foreach ($request->input('genre') as $key => $val) {
            Game::find($id)->genres()->attach($id, ['genres_id' => $key, 'games_id' => $id]);
        }
        foreach ($request->input('mode') as $key => $val) {
            Game::find($id)->modes()->attach($id, ['modes_id' => $key, 'games_id' => $id]);
        }
        foreach ($request->input('platform') as $key => $val) {
            Game::find($id)->platforms()->attach($id, ['platforms_id' => $key, 'games_id' => $id]);
        }
        foreach ($request->input('developer') as $key => $val) {
            Game::find($id)->developers()->attach($id, ['developers_id' => $key, 'games_id' => $id]);
        }

        $updateGame =  Game::where('deleted_at', null)->where('id', $id)
            ->update([
                'reference' => $request->input('reference'),
                'dateRelease' => $request->input('dateRelease'),
                'stock' => $request->input('stock'),
                'synopsis' => $request->input('synopsis'),
                'miniature' => "game$id.png"
            ]);;

        return $updateGame;
    }
}
