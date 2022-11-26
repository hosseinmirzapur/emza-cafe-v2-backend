<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends Model
{
    protected $guarded = [];

    /**
     * @return MorphTo
     */
    public function category(): MorphTo
    {
        return $this->morphTo(Category::class);
    }

    /**
     * @return BelongsToMany
     */
    public function branches(): BelongsToMany
    {
        return $this->belongsToMany(Branch::class);
    }

    /**
     * @return BelongsToMany
     */
    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }
}
