<?php

namespace App\Contracts\Services\ProductApi;

/**
 * Interface for major service
 */
interface ProductApiServiceInterface
{
    /**
     * To get product list
     * @return array $pruducts list
     */
    public function getIndex();

    /**
     * To get product list
     * @return array $product data
     */
    public function getShow($id);
}
