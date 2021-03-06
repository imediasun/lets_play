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
    protected $table = 'customers_deals';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'deals_type_id',
        'title',
        'description',
    ];

    /**
     * Get the type source that owns the deal.
     */
    public function type()
    {
        return $this->belongsTo(DealType::class, 'deals_type_id');
    }
}
