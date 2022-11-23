<?php


namespace App\Classes\Branches;


use App\Models\Branch;

class CafeBranch extends Branch
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'CAFE');
        parent::__construct($attributes);
    }
}
