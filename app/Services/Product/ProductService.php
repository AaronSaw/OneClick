<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Contracts\Services\product\ProductServiceInterface;
use App\Contracts\Dao\Product\ProductDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * To get products list
     * @return array $categories
     */
    public function getCreate()
    {
        return $this->productDao->getCreate();
    }

    /**
     * To store $product Data
     * @param Request $request request with inputs
     * @return Store $product data
     */
    public function getStore($request)
    {
        $newName = uniqid() . "_image." . $request->file('image')->extension();
        $request->file('image')->storeAs("public", $newName);
        return  $this->productDao->getStore($request, $newName);
    }

    /**
     * To get products list
     * @return array $categories
     */
    public function getEdit()
    {
        return $this->productDao->getEdit();
    }

    /**
     * To Delete data
     * @param product $product
     * @return Delete $product data
     */
    public function getDelete($product)
    {
        return $this->productDao->getDelete($product);
    }

    /**
     * To Update $product data
     * @param Request $request request with inputs
     * @param product $product
     * @return updata $product data
     */
    public function getUpdate($request, $product)
    {
        if ($request->hasFile('image')) {
            //update photo
            Storage::delete("public/" . $product->image);
            $newName = uniqid() . "image." . $request->file('image')->extension();
            $request->file('image')->storeAs("public", $newName);
        } else {
            $newName = $product->image;
        }
        return $this->productDao->getUpdate($request, $product, $newName);
    }
}
