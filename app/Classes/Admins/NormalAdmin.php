<?php


namespace App\Classes\Admins;


use App\Models\Admin;

class NormalAdmin extends Admin
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'NORMAL');
        parent::__construct($attributes);
    }
}
