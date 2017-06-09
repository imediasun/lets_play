<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactType
 * @package App\Models\Customer
 */
class ContactType extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'customers_contact_types';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'title',
    ];
}
