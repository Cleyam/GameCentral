<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\RentRequest;

class Rental extends Model
{

    use Notifiable;
    use SoftDeletes;

    protected $table = 'rentals';

    protected $fillable = [
        'dateStart', 'dateEnd', 'users_id', 'games_id'
    ];

    public static function rentGame(RentRequest $request)
    {
        $dateEnd = $request->input('dateEnd');
        $rentGame = Rental::create([
            'dateStart' => date("Y-m-d"),
            'dateEnd' => date("Y-m-d", strtotime($dateEnd)),
            'users_id' => $request->input('customer'),
            'games_id' => $request->input('game'),
        ]);
        return $rentGame;
    }

    public static function returnGame(RentRequest $request)
    {
        $returnGame = Rental::where('deleted_at', null)
            ->where('users_id', $request->input('customer'))
            ->where('games_id', $request->input('game'))
            ->delete();
        return $returnGame;
    }
}
