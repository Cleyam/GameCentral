<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Rental extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'rentals';
}
