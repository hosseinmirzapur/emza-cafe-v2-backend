<?php


namespace App\Classes\Category\Scopes;


use App\Models\Sentence;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SentenceScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
       $builder->where('type', Sentence::class);
    }
}
