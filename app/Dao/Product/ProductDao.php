<?php

namespace App\Dao\Product;

use App\Models\Product;
use App\Contracts\Dao\product\ProductDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Data accessing object for product
 */
class productDao implements productDaoInterface
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
     * To store $product data
     * @param Request $request request with inputs
     * @return store $product data
     */
    public function getStore($request)
    {
        $product = new Product();
        $newName = uniqid() . "_image." . $request->file('image')->extension();
        $request->file('image')->storeAs("public", $newName);
        $product->image = $newName;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->save();
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
    public function getUpdate($request, $product)
    {
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;
        //delete old  photo
        //Storage::delete("public/" . $product->image);
        if ($request->hasFile('image')) {
            //update photo
            Storage::delete("public/" . $product->image);
            $newName = uniqid() . "image." . $request->file('image')->extension();
            $request->file('image')->storeAs("public", $newName);
            $product->image = $newName;
        }
        //$request->file('image')->storeAs("public", $newName);
        $product->update();
    }
}
