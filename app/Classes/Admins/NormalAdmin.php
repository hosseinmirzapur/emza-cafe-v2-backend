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

    /**
     * @param string[] $abilities
     * @return string
     */
    public function newToken(array $abilities = ['*']): string
    {
        $this->tokens()->delete();
        return $this->createToken('normalAdmin', $abilities)->plainTextToken;
    }
}
