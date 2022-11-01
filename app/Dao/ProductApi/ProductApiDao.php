<?php

namespace App\Dao\ProductApi;

use App\Models\Product;
use App\Contracts\Dao\ProductApi\ProductApiDaoInterface;

/**
 * Data accessing object for product
 */
class ProductApiDao implements ProductApiDaoInterface
{
    /**
     * To get $products
     * @return array $products list
     */
    public function getIndex()
    {
        $products = Product::latest('id')
            ->get();
        return $products;
    }

    /**
     * To get $products
     * @return array $products data
     */
    public function getShow($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
