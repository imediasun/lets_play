<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 * @package App\Models\Customer
 */
class Group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers_groups';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    /**
     * Get the customers for the group.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class, 'group_id');
    }

}
