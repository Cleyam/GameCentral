<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class GamePlatform extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'game_platforms';
}
