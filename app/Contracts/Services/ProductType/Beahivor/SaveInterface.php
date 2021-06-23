<?php

use App\Models\Product;

interface SaveInterface
{
    public function save(Product $product);
}