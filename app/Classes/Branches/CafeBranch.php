<?php


namespace App\Classes\Branches;


use App\Classes\Branches\Scopes\CafeBranchScope;
use App\Models\Branch;

class CafeBranch extends Branch
{
    protected $table = 'branches';

    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'CAFE');
        parent::__construct($attributes);
    }

    public static function booted()
    {
        static::addGlobalScope(new CafeBranchScope());
    }
}
