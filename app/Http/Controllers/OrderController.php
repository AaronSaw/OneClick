<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Contracts\Services\Order\OrderServicesInterface;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Mail\comfirmMail;
use App\Mail\confirmMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return redirect('/orderlist')->with('status','order is deleted successfully');
    }

    public function confirm($id){
        Mail::to(Auth::user()->email)
        ->send(new comfirmMail());
        $this->orderInterface->confirm($id);
        return redirect()->route('dashboard.orderlist');
    }
}
