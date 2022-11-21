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
     * @param $table and $description
     * To get count order
     */
    public function countOrder($table, $description)
    {
        return $this->orderDao->countOrder($table, $description);
    }


    /**
     * To get countorder
     */
    public function countOrderNO()
    {
        return $this->orderDao->countOrderNO();
    }

    /**
     * To get countcategory
     */
    public function countCategory()
    {
        return $this->orderDao->countCategory();
    }

    /**
     * To get countUser
     */
    public function countUser()
    {
        return $this->orderDao->countUser();
    }

    /**
     * To get countproduct
     */
    public function countProduct()
    {
        return $this->orderDao->countProduct();
    }

    /**
     * To get userOrder
     */
    public function userOrder()
    {
        return $this->orderDao->userOrder();
    }

    /**
     * To get userOrder
     */
    public function totaluserOrder()
    {
        return $this->orderDao->totaluserOrder();
    }
}
