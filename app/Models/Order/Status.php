<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * @package App\Models\Order
 */
class Status extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'order_statuses';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'name',
        'title',
    ];

    /**
     * Get the orders for the status.
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id');
    }
}
