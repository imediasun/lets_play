<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Models\User
 */
class User extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'mobile',
        'add_phone',
        'information',
        'status',
        'activated',
    ];
}
