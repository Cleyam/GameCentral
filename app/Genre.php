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

    public static function getGenres()
    {
        $genres = Genre::where('genres.deleted_at', null)
            ->select('*')
            ->get();
        return $genres;
    }
}
