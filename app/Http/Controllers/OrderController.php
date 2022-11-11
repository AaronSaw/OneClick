<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Contracts\Services\Order\OrderServicesInterface;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class OrderController extends Controller
{
    private $orderInterface;
    public function __construct(OrderServicesInterface $OrderServicesInterface)
    {
        $this->orderInterface = $OrderServicesInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderInterface->getIndex();
        return view('order.index', compact('orders'));
    }

    public function destroy(Order $order)
    {
        $this->orderInterface->deleteOrder($order);
        return redirect('/orderlist')->with('status', 'order is deleted successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userOrder()
    {
        $userOrder = $this->orderInterface->userOrder();
        $prices = 0;
        $ordersNo = 0;
        foreach ($userOrder as $key => $value) {
            $ordersNo++;
            $prices = $prices + $value->price;
        }
        return view('user.order_list', compact(['userOrder', 'prices', 'ordersNo']));
    }
}
