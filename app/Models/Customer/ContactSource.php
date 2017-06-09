<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactSource
 * @package App\Models\Customer
 */
class ContactSource extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'customers_contact_sources';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'title',
    ];
}
