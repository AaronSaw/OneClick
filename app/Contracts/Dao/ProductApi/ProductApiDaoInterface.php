<?php

namespace App\Contracts\Dao\ProductApi;

/**
 * Interface for Data Accessing Object of product
 */
interface ProductApiDaoInterface
{
    /**
     * To get $products
     * @return array $products list
     */
    public function getIndex();

    /**
     * To store $product data
     * @return store $product data
     */
    public function getShow($id);


}
