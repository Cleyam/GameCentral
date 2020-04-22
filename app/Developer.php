<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Developer extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'developers';

    protected $fillable = [
        'name'
    ];
}
