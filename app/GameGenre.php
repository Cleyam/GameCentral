<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class GameGenre extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'game_genres';
}
