<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Sentence extends Model
{
    protected $guarded = [];

    /**
     * @return MorphTo
     */
    public function category(): MorphTo
    {
        return $this->morphTo(Category::class);
    }

}
