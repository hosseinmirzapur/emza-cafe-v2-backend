<?php


namespace App\Classes\Category;


use App\Classes\Category\Scopes\ProductScope;
use App\Models\Category;
use App\Models\Product;

class ProductCategory extends Category
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', Product::class);
        parent::__construct($attributes);
    }

    protected static function booted()
    {
        static::addGlobalScope(new ProductScope());
    }
}
