<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Gate;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook_id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user');
    }

    public function canDo($permission, $require = false)
    {
        if (is_array($permission)) {
            foreach ($permission as $permi) {
                foreach ($this->roles as $role) {
                    foreach ($role->perms as $perm) {
                        if (str_is($permi, $perm->name)) {
                            return true;
                        }
                    }
                }
            }
        } else {
            foreach ($this->roles as $role) {
                foreach ($role->perms as $perm) {
                    if (str_is($permission, $perm->name)) {
                        return true;
                    }
                }
            }
        }
    }
}
