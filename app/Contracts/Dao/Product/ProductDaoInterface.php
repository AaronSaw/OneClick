<?php

namespace App\Contracts\Dao\Product;

use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of product
 */
interface ProductDaoInterface
{
    /**
     * To get $products
     * @return array $products
     */
    public function getIndex();

    /**
     * To store $product data
     * @param Request $request request with inputs
     * @return store $product data
     */
    public function getStore(Request $request);

    /**
     * To delete $product data
     * @param product $product
     * @return delete $product data
     */
    public function getDelete(Product $product);

    /**
     * To updata $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return updata $product datta
     */
    public function getUpdate(Request $request, Product $product);
}
