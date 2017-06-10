<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DealType
 * @package App\Models\Customer
 */
class DealType extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'customers_deals_types';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'title',
    ];
}
