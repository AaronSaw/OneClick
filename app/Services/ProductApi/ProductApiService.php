<?php

namespace App\Services\ProductApi;

use App\Contracts\Services\ProductApi\ProductApiServiceInterface;
use App\Contracts\Dao\ProductApi\ProductApiDaoInterface;

class ProductApiService implements ProductApiServiceInterface
{
    private $productapiDao;
    public function __construct(ProductApiDaoInterface $productapiDao)
    {
        $this->productapiDao = $productapiDao;
    }

    /**
     * To get product list
     * @return array $products list
     */
    public function getIndex()
    {
        return $this->productapiDao->getIndex();
    }
    /**
     * To get product list
     * @return array $products data
     */
    public function getShow($id)
    {
        return $this->productapiDao->getShow($id);
    }
}
