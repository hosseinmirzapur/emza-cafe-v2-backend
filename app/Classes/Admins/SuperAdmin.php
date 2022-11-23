<?php


namespace App\Classes\Admins;


use App\Models\Admin;

class SuperAdmin extends Admin
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'SUPER');
        parent::__construct($attributes);
    }
}
