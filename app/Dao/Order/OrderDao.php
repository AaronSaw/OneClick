<?php

namespace App\Dao\Order;

use App\Models\Order;
use App\Contracts\Dao\Order\OrderDaoInterface;
use Illuminate\Http\Request;
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
     * To get userOrder
     */
    public function userOrder()
    {
        $userId = Auth::user()->id;
        $userOrder = Order::Join('products', 'products.id', '=', 'orders.product_id')
            ->where('orders.user_id', '=', "$userId")
            ->latest('id')
            ->select('products.title', 'products.price', 'orders.created_at', 'products.category_id', 'orders.id')
            ->get();

        return $userOrder;
    }
}
