<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Http\Requests\AdminUserRequest;

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

    public static function getEmployees()
    {
        $employees = User::where('auth', 'employee')->where('deleted_at', null)->select('*')->get();
        return $employees;
    }

    public static function getEmployee($id)
    {
        $employee = User::where('auth', 'employee')->where('deleted_at', null)->where('id', $id)->select('*')->first();
        return $employee;
    }

    public static function deleteEmployee($id)
    {
        $deleteEmployee = User::where('auth', 'employee')->where('deleted_at', null)->where('id', $id)->delete();
        return $deleteEmployee;
    }

    public static function updateEmployee(AdminUserRequest $request, $id)
    {
        $updateEmployee = User::where('auth', 'employee')->where('deleted_at', null)->where('id', $id)->update(['login' => $request->input('login'), 'email' => $request->input('email'), 'name' => $request->input('name'), 'surname' => $request->input('surname'), 'phone' => $request->input('phone'), 'password' => bcrypt($request->input('password'))]);
        return $updateEmployee;
    }

    public static function addEmployee(AdminUserRequest $request)
    {
        $addEmployee = User::create(['login' => $request->input('login'), 'email' => $request->input('email'), 'name' => $request->input('name'), 'surname' => $request->input('surname'), 'phone' => $request->input('phone'), 'auth' => 'employee', 'password' => bcrypt($request->input('password'))]);
        return $addEmployee;
    }
}
