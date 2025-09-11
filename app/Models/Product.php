<?php

namespace App\Models;
use App\Models\ProductCategories;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category() {
        return $this->belongsTo(ProductCategories::class);
    }
    
    // public function category()
    // {
    //     return $this->belongsTo(ProductCategories::class, 'product_category_id');
    // }
}
