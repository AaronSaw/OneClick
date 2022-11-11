<?php

namespace App\Dao\Order;

use App\Models\Order;
use App\Contracts\Dao\Order\OrderDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $orders = Order::paginate(5);
        return $orders;
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrfail($id);
        $order->delete();
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
}
