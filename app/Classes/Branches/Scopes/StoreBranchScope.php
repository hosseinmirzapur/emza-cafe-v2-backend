<?php


namespace App\Classes\Branches\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class StoreBranchScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('type', 'STORE');
    }
}
