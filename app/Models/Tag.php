<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $guarded = [];

    /**
     * @return BelongsToMany
     */
    public function sentences(): BelongsToMany
    {
        return $this->belongsToMany(Sentence::class);
    }
}
