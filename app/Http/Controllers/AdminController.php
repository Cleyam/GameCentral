<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AdminUserRequest;
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

    public function games()
    {
        return view('admin/games');
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
