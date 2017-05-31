<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package App\Models\Customer
 */
class Customer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * Get the group that owns the customer.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}