<?php


namespace App\Classes\Category;


use App\Models\Category;
use App\Models\Product;

class ProductCategory extends Category
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', Product::class);
        parent::__construct($attributes);
    }
}
