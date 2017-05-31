<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models\Catalog
 */
class Category extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'catalog_categories';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'active',
    ];

    /**
     * Get the parent category that owns the category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
