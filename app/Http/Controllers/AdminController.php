<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminUserRequest;
use App\Http\Requests\AdminGameRequest;
use App\User;
use App\Game;
use App\Genre;
use App\Mode;
use App\Platform;
use App\Developer;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    // Game Controllers

    public function games()
    {
        $games = Game::getGames();
        return view('admin/games')->with('games', $games);
    }

    public function deleteGame($id)
    {
        Game::deleteGame($id);
        Storage::delete("game$id.png");
        $games = Game::getGames();
        return redirect('admin/games')->with('games', $games);
    }

    public function game($id)
    {
        $game = Game::getGame($id);
        $genres = Genre::getGenres();
        $modes = Mode::getModes();
        $platforms = Platform::getPlatforms();
        $developers = Developer::getDevelopers();
        return view('admin/game')->with('game', $game)->with('genres', $genres)->with('modes', $modes)->with('platforms', $platforms)->with('developers', $developers);
    }

    public function updateGame(AdminGameRequest $request, $id)
    {
        if ($request->hasFile('miniature')) {
            Storage::delete("game$id.png");
            $request->file('miniature')->storeAs('miniatures', "game$id.png");
        }
        Game::updateGame($request, $id);
        $games = Game::getGames();
        return redirect('admin/games')->with('games', $games);
    }

    public function newGame()
    {
        $genres = Genre::getGenres();
        $modes = Mode::getModes();
        $platforms = Platform::getPlatforms();
        $developers = Developer::getDevelopers();
        return view('admin/gameNew')->with('genres', $genres)->with('modes', $modes)->with('platforms', $platforms)->with('developers', $developers);
    }

    public function addGame(AdminGameRequest $request)
    {
        $newGame = Game::addGame($request);
        if ($request->hasFile('miniature')) {
            Storage::delete("game$newGame->id.png");
            $request->file('miniature')->storeAs('miniatures', "game$newGame->id.png");
        }
        $games = Game::getGames();
        return redirect('admin/games')->with('games', $games);
    }

    // Customer Controllers

    public function customers()
    {
        $customers = User::getCustomers();
        return view('admin/customers')->with('customers', $customers);
    }

    public function deleteCustomer($id)
    {
        User::deleteCustomer($id);
        $customers = User::getCustomers();
        return redirect('admin/customers')->with('customers', $customers);
    }

    public function customer($id)
    {
        $customer = User::getCustomer($id);
        return view('admin/customer')->with('customer', $customer);
    }

    public function updateCustomer(AdminUserRequest $request, $id)
    {
        User::updateCustomer($request, $id);
        $customers = User::getCustomers();
        return redirect('admin/customers')->with('customers', $customers);
    }

    public function newCustomer()
    {
        return view('admin/customerNew');
    }

    public function addCustomer(AdminUserRequest $request)
    {
        User::addCustomer($request);
        $customers = User::getCustomers();
        return redirect('admin/customers')->with('customers', $customers);
    }

    // Employee Controllers

    public function employees()
    {
        $employees = User::getEmployees();
        return view('admin/employees')->with('employees', $employees);
    }

    public function deleteEmployee($id)
    {
        User::deleteEmployee($id);
        $employees = User::getEmployees();
        return redirect('admin/employees')->with('employees', $employees);
    }

    public function employee($id)
    {
        $employee = User::getEmployee($id);
        return view('admin/employee')->with('employee', $employee);
    }

    public function updateEmployee(AdminUserRequest $request, $id)
    {
        User::updateEmployee($request, $id);
        $employees = User::getEmployees();
        return redirect('admin/employees')->with('employees', $employees);
    }

    public function newEmployee()
    {
        return view('admin/employeeNew');
    }

    public function addEmployee(AdminUserRequest $request)
    {
        User::addEmployee($request);
        $employees = User::getEmployees();
        return redirect('admin/employees')->with('employees', $employees);
    }
}
