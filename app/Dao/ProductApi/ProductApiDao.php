<?php

namespace App\Dao\ProductApi;

use App\Models\Product;
use App\Contracts\Dao\ProductApi\ProductApiDaoInterface;
use Illuminate\Support\Facades\DB;

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
        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.ctitle')
            ->get();
        return $products;
    }

    /**
     * To get $products
     * @return array $products data
     */
    public function getShow($id)
    {
        $product = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.ctitle')->find($id);
        return $product;
    }
}
