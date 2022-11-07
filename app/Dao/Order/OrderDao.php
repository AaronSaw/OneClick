<?php

namespace App\Dao\Order;
use App\Models\Order;
use App\Contracts\Dao\Order\OrderDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for post
 */
class OrderDao implements OrderDaoInterface
{
  /**
   * To show Orders list
   */
    public function getIndex() {
        $orders = Order::paginate(5);
        return $orders;
    }

    public function deleteOrder($id) {
        $order = Order::findOrfail($id);
        $order->delete();
    }
}
