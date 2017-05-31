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
     * Get the customers for the group.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class, 'group_id');
    }

}
