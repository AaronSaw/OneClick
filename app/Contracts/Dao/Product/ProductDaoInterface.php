<?php

namespace App\Contracts\Dao\Product;

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
     * To get products list
     * @return array $products
     */
    public function getCreate();

    /**
     * To store $product data
     * @param Request $request request with inputs
     * @return store $product data
     */
    public function getStore( $request,$newName);

     /**
     * To get products list
     * @return array $products
     */
    public function getEdit();

    /**
     * To delete $product data
     * @param product $product
     * @return delete $product data
     */
    public function getDelete($product);

    /**
     * To updata $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return updata $product datta
     */
    public function getUpdate($request,$product,$newName);
}
