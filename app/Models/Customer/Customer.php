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
     * @var array  fields to save
     */
    protected $fillable = [
        'group_id',
        'contact_type_id',
        'contact_source_id',
        'email',
        'phone',
        'first_name',
        'last_name',
        'active',
    ];

    /**
     * Get the group that owns the customer.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get the contact type that owns the customer.
     */
    public function contactType()
    {
        return $this->belongsTo(ContactType::class);
    }

    /**
     * Get the contact source that owns the customer.
     */
    public function contactSource()
    {
        return $this->belongsTo(ContactSource::class);
    }
}
