<?php

namespace App\Dao\Product;

use App\Models\Product;
use App\Contracts\Dao\product\ProductDaoInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Data accessing object for product
 */
class ProductDao implements ProductDaoInterface
{
    /**
     * To get $products
     * @return array $products
     */
    public function getIndex()
    {
        //search query
        $products =
            Product::Join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.ctitle')
            ->when(request('title'), function ($q) {
                $title = request("title");
                $q->where("title", "like", "%$title%");
            })
            ->when(request('price'), function ($q) {
                $price = request("price");
                $q->where("price", "like", "%$price%");
            })
            ->when(request('ctitle'), function ($q) {
                $ctitle = request("ctitle");
                $q->where("categories.ctitle", "like", "%$ctitle%");
            })
            ->when(request('sdate'), function ($p) {
                $sDate = request("sdate");
                $p->where("products.created_at", ">", "$sDate");
            })
            ->when(request('edate'), function ($e) {
                $eDate = request("edate");
                $e->where("products.created_at", "<", "$eDate");
            })
            ->when(request('description'), function ($e) {
                $description = request("description");
                $e->where("description", "like", "%$description%");
            })
            ->paginate(5)->withQueryString();
        return $products;
    }

    /**
     * To get products list
     * @return array $cateogories
     */
    public function getCreate()
    {
        $categories = Category::all();
        return $categories;
    }

    /**
     * To store $product data
     * @param Request $request request with inputs
     * @return store $product data
     */
    public function getStore($request, $newName)
    {
        $product = new Product();
        $product->image = $newName;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->save();
    }

    /**
     * To get products list
     * @return array $categories
     */
    public function getEdit()
    {
        $categories = Category::all();
        return $categories;
    }

    /** To delete $product data
     * @param product $product
     * @return delete $product data
     */
    public function getDelete($product)
    {
        Storage::delete("public/" . $product->image);
        $product->delete();
    }

    /**
     * @param Request $request request with inputs
     * @param product $product
     * To updata $product data
     * @return update $product data
     */
    public function getUpdate($request, $product, $newName)
    {
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->image = $newName;
        $product->update();
    }
}
