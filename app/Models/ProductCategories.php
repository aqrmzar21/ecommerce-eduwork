<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    //
    public function products() {
        return $this->hasMany(Product::class);
    }

    protected $table = 'product_categories';
}
