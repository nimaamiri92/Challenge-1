<?php

namespace App\Services;

use App\Models\Product;
use App\Repository\DefaultRepository;

class DefaultService
{
    public $defaultRepository;


    public function __construct(DefaultRepository $defaultRepository)
    {
        $this->defaultRepository = $defaultRepository;
    }

    public function saveProductByType(array $data)
    {

            switch ($data['type']) {
                case Product::getNormalType():
                    break;
                case Product::getRefrigeratorType():
                    break;
            }


            if ($type == 'normal') {
                Log::debug('Product is of type: normal');

                $id = $this->findProductByName($data['name']);

                $product = $this->defaultRepository->getProductById($id);

                $product->update($data);

            } elseif ($type == 'refrigerator') {
//                Log::debug('Product is of type: refrigerator');

                $id = $this->findProductByName($productName);

                $product = $this->repo->getProductById($id);
                $product->quantity = $quantity;
                $product->price = $price;
                $product->isRefrigirator = true;
                $product->save();

            }


        return true;
    }

    /**
     * @param $productName
     * @return int
     */
    private function findProductByName($productName): int
    {
        $firstUnderscore = strpos($productName, '_');
        $secondUnderscore = strpos($productName, '_', $firstUnderscore + 1);
        $id = (int)substr($productName, $firstUnderscore + 1, $secondUnderscore - $firstUnderscore - 1);
        return $id;
    }
}