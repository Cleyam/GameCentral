<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
