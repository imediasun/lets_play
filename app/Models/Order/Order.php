<?php

namespace App\Models\Order;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models\Order
 */
class Order extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'status_id',
        'customer_id',
        'oblast',
        'region',
        'city',
        'address',
        'postcode',
        'total',
        'quantity',
    ];

    /**
     * Status of order
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    /**
     * Customer of order
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
