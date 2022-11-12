<?php

namespace App\Contracts\Services\Order;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Order
 */
interface OrderServicesInterface
{
    /**
     * To get Order
     */
    public function getIndex();

    /**
     * To delete Order
     */
    public function deleteOrder($id);

    /**
     * @param 4id
     * To get confirm
     */
    public function confirm($id);

    /**
     * To get userOrder
     */
    public function userOrder();
}
