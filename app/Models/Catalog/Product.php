<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models\Catalog
 */
class Product extends Model
{
    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'category_id',
        'name',
        'art',
        'price',
        'qnt',
        'description',
        'description2',
        'active',
    ];

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'catalog_products';

    /**
     * Category of product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
