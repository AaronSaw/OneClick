<?php

namespace App\Contracts\Services\Product;

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
     * To get products list
     * @return array $categories
     */
    public function getCreate();

    /**
     * To store $product data
     * @param Request $request request with inputs
     * @return  Store $product data
     */
    public function getStore($request);

    /**
     * To delete $product data
     * @param product $product
     * @return   delete $product data
     */
    public function getDelete($product);

    /**
     * To get products list
     * @return array $categories
     */
    public function getEdit();

    /**
     * To update $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return Update $product data
     */
    public function getUpdate($request,$product);
}
