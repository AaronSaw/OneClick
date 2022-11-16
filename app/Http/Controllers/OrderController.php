<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Contracts\Services\Order\OrderServicesInterface;
use App\Mail\comfirmMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Category;

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

    /**
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $this->orderInterface->deleteOrder($order);
        return redirect('/orderlist')->with('status', 'Order is deleted successfully');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function orderCount()
    {
        $countOrder = $this->orderInterface->countOrderNO();
        $countUser = $this->orderInterface->countUser();
        $countProduct = $this->orderInterface->countProduct();
        $countCategory = $this->orderInterface->countCategory();
        $catName = [];
        $countOrderByCategory = [];
        foreach (Category::all() as $c) {
            array_push($catName, $c->ctitle);
            array_push($countOrderByCategory,  $this->orderInterface->countOrder('orders', $c->id));
        }
        return view('admin.dashbord', compact(['catName', 'countOrderByCategory', 'countProduct', 'countUser', 'countOrder', 'countCategory']));
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
            $prices = $prices + ($value->price*$value->quantity);
        }
        return view('user.order_list', compact(['userOrder', 'prices', 'ordersNo']));
    }

    public function confirm($id)
    {
        Mail::to(Auth::user()->email)
            ->send(new ComfirmMail());
        $this->orderInterface->confirm($id);
        return redirect()->route('dashboard.orderlist')->with('status','Confirm message was sent.');
    }
}
