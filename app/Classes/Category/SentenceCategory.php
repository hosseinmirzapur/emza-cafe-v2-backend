<?php


namespace App\Classes\Category;


use App\Models\Category;
use App\Models\Sentence;

class SentenceCategory extends Category
{
    public function __construct(array $attributes = [])
    {
        $this->setAttribute('type', Sentence::class);
        parent::__construct($attributes);
    }
}
