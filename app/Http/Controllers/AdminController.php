<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function customers()
    {
        return view('admin/customers');
    }

    public function games()
    {
        return view('admin/games');
    }

    public function employees()
    {
        return view('admin/employees');
    }
}
