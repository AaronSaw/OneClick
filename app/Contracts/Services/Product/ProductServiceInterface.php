<?php

namespace App\Contracts\Services\Product;

use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Interface for product service
 */
interface ProductServiceInterface
{
    /**
     * To get products list
     * @return array $products
     */
    public function getIndex();

    /**
     * To store $product data
     * @param Request $request request with inputs
     * @return  Store $product data
     */
    public function getStore(Request $request);

    /**
     * To delete $product data
     * @param product $product
     * @return   delete $product data
     */
    public function getDelete(Product $product);

    /**
     * To update $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return Update $product data
     */
    public function getUpdate(Request $request, Product $product);
}
