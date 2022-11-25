<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $guarded = [];

    const TYPES = ['STORE', 'CAFE'];

    /**
     * @return HasMany
     */
    public function admins(): HasMany
    {
        return $this->hasMany(Admin::class, 'branch_id');
    }
}
