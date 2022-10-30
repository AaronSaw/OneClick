<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Contracts\Services\product\ProductServiceInterface;
use App\Contracts\Dao\Product\ProductDaoInterface;
use Illuminate\Http\Request;

class ProductService implements ProductServiceInterface
{
    private $productDao;
    public function  __construct(ProductDaoInterface $productDao)
    {
        $this->productDao = $productDao;
    }

    /**
     * To get product list
     * @return array $products list
     */
    public function getIndex()
    {
        return $this->productDao->getIndex();
    }

    /**
     * To store $product Data
     * @param Request $request request with inputs
     * @return Store $product data
     */
    public function getStore(Request $request)
    {
        return  $this->productDao->getStore($request);
    }

    /**
     * To Delete data
     * @param product $product
     * @return Delete $product data
     */
    public function getDelete(Product $product)
    {
        return $this->productDao->getDelete($product);
    }

    /**
     * To Update $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return updata $product data
     */
    public function getUpdate(Request $request, Product $product)
    {
        return $this->productDao->getUpdate($request, $product);
    }
}
