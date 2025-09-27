<?php

namespace App\Models;
use App\Models\ProductCategories;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'stock',
        'product_categories_id',
    ];
    public function category()
{
    return $this->belongsTo(ProductCategories::class, 'product_categories_id');
}

    // public function category()
    // {
    //     return $this->belongsTo(ProductCategories::class, 'product_category_id');
    // }

}
