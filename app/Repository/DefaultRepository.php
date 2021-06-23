<?php
namespace App\Repository;

use App\Models\Product;

class DefaultRepository extends BaseRepository implements DefaultRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function getProductById(int $id): Product
    {
        return $this->model->find($id);
    }
}