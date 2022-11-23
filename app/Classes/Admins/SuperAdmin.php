<?php


namespace App\Classes\Admins;


use App\Models\Admin;

class SuperAdmin extends Admin
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', 'SUPER');
        $this->setAttribute('role', 'SUPER_ADMIN');
        parent::__construct($attributes);
    }

    /**
     * @return string
     */
    public function newToken(): string
    {
        $this->tokens()->delete();
        return $this->createToken('superAdmin')->plainTextToken;
    }
}
