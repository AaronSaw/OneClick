<?php

namespace App\Services\Order;

use App\Models\Order;
use App\Contracts\Services\Order\OrderServicesInterface;
use App\Contracts\Dao\Order\OrderDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for post
 */
class OrderServices implements OrderServicesInterface
{
    private $orderDao;

    public function __construct(OrderDaoInterface $OrderDao)
    {
        $this->orderDao = $OrderDao;
    }
    /**
     * To get Order
     */
    public function getIndex()
    {
        return $this->orderDao->getIndex();
    }

    /**
     * To delete Order by id
     */
    public function deleteOrder($id)
    {
        return $this->orderDao->deleteOrder($id);
    }

    /**
     * @param $id
     * To get confirm
     */
    public function confirm($id)
    {
        return $this->orderDao->confirm($id);
    }

    /**
     * To get userOrder
     */
    public function userOrder()
    {
        return $this->orderDao->userOrder();
    }
}
