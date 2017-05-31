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
