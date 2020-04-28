<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Mode extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'modes';

    protected $fillable = [
        'name'
    ];

    public static function getModes()
    {
        $modes = Mode::where('modes.deleted_at', null)
            ->select('*')
            ->get();
        return $modes;
    }
}
