<?php


use App\Models\Product;

interface DefaultRepositoryInterface
{
    public function getProductById(int $id): Product;
}