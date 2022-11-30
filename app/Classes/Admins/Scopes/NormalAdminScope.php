<?php


namespace App\Classes\Admins\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class NormalAdminScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('type', 'NORMAL');
    }
}
