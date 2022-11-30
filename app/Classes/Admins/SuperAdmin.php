<?php


namespace App\Classes\Admins;


use App\Classes\Admins\Scopes\SuperAdminScope;
use App\Models\Admin;

class SuperAdmin extends Admin
{
    protected $table = 'admins';

    public function __construct(array $attributes = [])
    {
        $this->setAttribute('role', 'SUPER_ADMIN');
        $this->setAttribute('type', 'SUPER');
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

    protected static function booted()
    {
        static::addGlobalScope(new SuperAdminScope());
    }
}
