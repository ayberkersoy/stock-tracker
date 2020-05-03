<?php

namespace App;

class Product extends Model
{
    protected $guarded = [];

    public function inStock()
    {
        return false;
    }
}
