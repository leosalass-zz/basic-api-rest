<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_state', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permissions(){
        return $this->belongsToMany('App\UserPermission', 'user_has_user_permissions', 'id_user', 'id_user_permission')
            ->withPivot('action')
            ->withTimestamps();
    }

    public function roles(){
        return $this->belongsToMany('App\UserRol', 'user_has_user_roles', 'id_user', 'id_user_rol')
            ->withTimestamps();
    }

    public function state(){
        return $this->belongsTo('App\UserState', 'id_state', 'id');
    }
}
