<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Deal
 * @package App\Models\Customer
 */
class Deal extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'customers_details';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'title',
        'description',
    ];
}
