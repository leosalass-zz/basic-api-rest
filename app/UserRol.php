<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_roles';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function permissions(){
        return $this->belongsToMany('App\UserPermission', 'user_roles_has_user_permissions', 'id_user_rol', 'id_user_permission')
            ->withTimestamps();
    }

    public function users(){
        return $this->belongsToMany('App\User', 'user_has_user_roles', 'id_user_rol', 'id_user')
            ->withTimestamps();
    }
}
