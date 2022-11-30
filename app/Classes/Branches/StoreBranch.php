<?php


namespace App\Classes\Branches;


use App\Classes\Branches\Scopes\StoreBranchScope;
use App\Models\Branch;

class StoreBranch extends Branch
{
    protected $table = 'branches';

    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'STORE');
        parent::__construct($attributes);
    }

    protected static function booted()
    {
        static::addGlobalScope(new StoreBranchScope());
    }
}
