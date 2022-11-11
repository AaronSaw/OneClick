<?php

namespace App\Dao\Product;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Dao\Product\ProductDaoInterface;

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
            ->latest('id')
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

    /**
     * To get product data
     * @return array $categories and product
     */
    public function getDetail($id)
    {
        $detail = Product::Join('categories', 'categories.id', '=', 'products.category_id')
            ->Where("products.id", "=", "$id")
            ->select('products.*', 'categories.ctitle')->get();
        return $detail;
    }

    /**
     * To get product data
     * @return array  conCategories
     */
    public function getRelatedDetail($id, $relatedId)
    {
        $relatedCategories = Product::Join('categories', 'categories.id', '=', 'products.category_id')
            ->Where("products.category_id", "=", "$relatedId")
            ->Where("products.id", "!=", "$id")
            ->select('products.*', 'categories.ctitle')->get();
        return $relatedCategories;
    }

    /**
     * To store data
     * @param request
     * @return array
     */
    public function orderStorePost($request, $id)
    {
        $order_data = $this->data($request, $id);
        $input = Order::create($order_data);
        $header = "<h3> Hi " . Auth::user()->name . " , </h3><h1>Thank you fo your Order!</h1><h4>Order No: #" . $input->id . "</h4>";
        $body = "<h3>Order Summary:</h3><hr><table><tr><th>Product Name</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th>Total Amount</th></tr><tr><td>" . $input->product->title . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>" . $input->product->price . "</td></tr></table><br><h3> From One click </h3>";
        $mail = Mail::send(
            'orderMail',
            ['header' => $header, 'body' => $body],
            function ($message) {
                $message->from('shoonlaeyeewin1602@gmail.com', 'One Click');
                $message->to(Auth::user()->email)
                    ->subject('Order Recepit');
            }
        );
        return compact('input', 'mail');
    }

    /**
     * request data
     * @param request
     * @return Array
     */
    private function data($request)
    {
        return [
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ];
    }
}
