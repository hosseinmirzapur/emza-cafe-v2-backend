<?php


namespace App\Classes\Branches;


use App\Models\Branch;

class StoreBranch extends Branch
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'STORE');
        parent::__construct($attributes);
    }
}
