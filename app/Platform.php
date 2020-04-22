<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Platform extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'platforms';

    protected $fillable = [
        'name'
    ];
}
