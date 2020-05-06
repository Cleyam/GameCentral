<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\User;
use App\Game;
use App\Genre;
use App\Mode;
use App\Platform;
use App\Developer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(SearchRequest $request)
    {

        if ($request->type == 'game') {
            $result = Game::searchGame($request);
            $type = 'game';
        } else if ($request->type == 'customer') {
            $result = User::searchCustomer($request);
            $type = 'customer';
        } else {
            $result = '';
            $type = '';
        }
        return view('search')->with('result', $result)->with('type', $type);
    }

    public function game($id)
    {
        $game = Game::getGame($id);
        $genres = Genre::getGenres();
        $modes = Mode::getModes();
        $platforms = Platform::getPlatforms();
        $developers = Developer::getDevelopers();
        return view('resultGame')->with('game', $game)->with('genres', $genres)->with('modes', $modes)->with('platforms', $platforms)->with('developers', $developers);
    }

    public function customer($id)
    {
        $customer = User::getCustomer($id);
        return view('resultCustomer')->with('customer', $customer);
    }
}
