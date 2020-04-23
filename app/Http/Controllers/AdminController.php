<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}
