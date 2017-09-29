<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_permissions';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function users(){
        return $this->belongsToMany('App\User', 'user_has_user_permissions', 'id_user_permission', 'id_user')
            ->withPivot('action')
            ->withTimestamps();
    }
}
