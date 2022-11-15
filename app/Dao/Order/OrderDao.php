<?php

namespace App\Dao\Order;

use App\Models\Order;
use App\Contracts\Dao\Order\OrderDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/**
 * Data accessing object for post
 */
class OrderDao implements OrderDaoInterface
{
    /**
     * To show Orders list
     */
    public function getIndex()
    {
        $orders = Order::Join('users', 'users.id', '=', 'orders.user_id')
            ->Join('products', 'products.id', '=', 'orders.product_id')
            ->select('orders.*', 'users.name', 'users.email', 'users.address', 'products.title', 'products.price', 'products.category_id')
            ->when(request('name'), function ($q) {
                $name = request("name");
                $q->where("users.name", "like", "%$name%");
            })
            ->when(request('title'), function ($q) {
                $title = request("title");
                $q->where("products.title", "like", "%$title%");
            })
            ->when(request('address'), function ($q) {
                $address = request("address");
                $q->where("users.address", "like", "%$address%");
            })
            ->when(request('sdate'), function ($p) {
                $sDate = request("sdate");
                $p->where("orders.created_at", ">", "$sDate");
            })
            ->when(request('edate'), function ($e) {
                $eDate = request("edate");
                $e->where("orders.created_at", "<", "$eDate");
            })
            ->orderBy('confirm', 'ASC')
            ->paginate(5)->withQueryString();
        return $orders;
    }

    public function deleteOrder($id)
    {
        $id->delete();
    }

    /**
     * @param $id
     * @return  confirm
     */
    public function confirm($id)
    {
        $order = Order::find($id);
        $order->confirm = "1";
        $order->update();
    }

    /**
     * @param $table and $description
     * To get count order
     */
    public function countOrder($table, $description)
    {
        $count =  DB::table("$table")
            ->join("products", "$table.product_id", '=', "products.id")
            ->select(DB::raw("COUNT($table.id) as count_id"))
            ->whereRaw('category_id = ?', [$description])
            ->first();
        return $count->count_id;
    }

    /**
     * To get countorder
     */
    public function countOrderNO()
    {
        $orders =  DB::table("orders")
            ->select(DB::raw("COUNT(id) as count_order"))
            ->first();
        return $orders->count_order;
    }

    /**
     * To get countcategory
     */
    public function countCategory()
    {
        $categories =  DB::table("categories")
            ->select(DB::raw("COUNT(id) as count_category"))
            ->first();
        return $categories->count_category;
    }

    /**
     * To get countUser
     */
    public function countUser()
    {
        $users =  DB::table("users")
            ->select(DB::raw("COUNT(id) as count_user"))
            ->first();
        return $users->count_user;
    }

    /**
     * To get countproduct
     */
    public function countProduct()
    {
        $products =  DB::table("products")
            ->select(DB::raw("COUNT(id) as count_product"))
            ->first();
        return $products->count_product;
    }

    /**
     * To get userOrder
     */
    public function userOrder()
    {
        $userId = Auth::user()->id;
        $userOrder = Order::Join('products', 'products.id', '=', 'orders.product_id')
            ->where('orders.user_id', '=', "$userId")
            ->latest('id')
            ->select('products.title', 'products.price', 'orders.created_at', 'products.category_id', 'orders.id','orders.confirm')
            ->get();

        return $userOrder;
    }
}
