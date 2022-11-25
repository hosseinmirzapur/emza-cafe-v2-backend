<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Category extends Model
{
    protected $guarded = [];

    const TYPES = [Sentence::class, Product::class];

    /**
     * @return MorphMany
     */
    public function sentences(): MorphMany
    {
        return $this->morphMany(Sentence::class, 'categoriable');
    }

    /**
     * @return MorphMany
     */
    public function products(): MorphMany
    {
        return $this->morphMany(Product::class, 'categoriable');
    }
}
