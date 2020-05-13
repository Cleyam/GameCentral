<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\RentRequest;
use App\User;
use App\Game;
use App\Genre;
use App\Mode;
use App\Platform;
use App\Developer;
use App\Rental;

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

    public function rentalform($idGame)
    {
        $game = Game::getGame($idGame);
        $data = User::getCustomers();
        foreach ($data as $customer) {
            $customers[] = $customer['name'];
        }
        return view('rental')->with('game', $game)->with('customers', $customers);
    }

    public function apiCustomers()
    {
        $query = request('query');
        $customers = User::sortCustomers($query);
        return response()->json($customers);
    }

    public function rent(RentRequest $request)
    {
        Rental::rentGame($request);
        Game::decreaseStock($request);
        return view('rentComplete');
    }

    public function customer($id)
    {
        $customer = User::getCustomer($id);
        dd($customer);
        return view('resultCustomer')->with('customer', $customer);
    }
}
