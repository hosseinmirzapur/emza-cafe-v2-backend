<?php


namespace App\Classes\Category\Scopes;


use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ProductScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('type', Product::class);
    }
}
