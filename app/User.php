<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Http\Requests\AdminUserRequest;
use App\Http\Requests\SearchRequest;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'name', 'surname', 'email', 'phone', 'password', 'auth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Employee Methods

    public static function getEmployees()
    {
        $employees = User::where('auth', 'employee')
            ->where('deleted_at', null)
            ->select('*')->get();
        return $employees;
    }

    public static function getEmployee($id)
    {
        $employee = User::where('auth', 'employee')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->select('*')->first();
        return $employee;
    }

    public static function deleteEmployee($id)
    {
        $deleteEmployee = User::where('auth', 'employee')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->delete();
        return $deleteEmployee;
    }

    public static function updateEmployee(AdminUserRequest $request, $id)
    {
        $updateEmployee = User::where('auth', 'employee')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->update([
                'login' => $request->input('login'),
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'phone' => $request->input('phone'),
                'password' => bcrypt($request->input('password'))
            ]);
        return $updateEmployee;
    }

    public static function addEmployee(AdminUserRequest $request)
    {
        $addEmployee = User::create([
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'auth' => 'employee',
            'password' => bcrypt($request->input('password'))
        ]);
        return $addEmployee;
    }

    // Customer Methods 

    public static function getCustomers()
    {
        $customers = User::where('auth', 'customer')
            ->where('deleted_at', null)
            ->select('*')->get();
        return $customers;
    }

    public static function sortCustomers($query)
    {
        $customers = User::where('auth', 'customer')
            ->where('deleted_at', null)
            ->where('name', 'like', '%' . $query . '%')
            ->get();
        return $customers;
    }

    public static function getCustomer($id)
    {
        $customer = User::where('auth', 'customer')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->select('*')->first();
        return $customer;
    }

    public static function deleteCustomer($id)
    {
        $deleteCustomer = User::where('auth', 'customer')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->delete();
        return $deleteCustomer;
    }

    public static function updateCustomer(AdminUserRequest $request, $id)
    {
        $updateCustomer = User::where('auth', 'customer')
            ->where('deleted_at', null)
            ->where('id', $id)
            ->update([
                'login' => $request->input('login'),
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'phone' => $request->input('phone'),
                'password' => bcrypt($request->input('password'))
            ]);
        return $updateCustomer;
    }

    public static function addCustomer(AdminUserRequest $request)
    {
        $addCustomer = User::create([
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'auth' => 'customer',
            'password' => bcrypt($request->input('password'))
        ]);
        return $addCustomer;
    }

    public static function searchCustomer(SearchRequest $request)
    {
        $result = User::where('name', 'LIKE', '%' . $request->input('search') . '%')
            ->orWhere('surname', 'LIKE', '%' . $request->input('search') . '%')
            ->where('auth', 'customer')
            ->where('deleted_at', null)
            ->select('*')->get();
        if (count($result) > 0) {
            return $result;
        }
    }
}
