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
     * To get CategoryName and countOrder
     */
    public function countOrder($table, $description);

    /**
     * To get countorder
     */
    public function countOrderNO();

    /**
     * To get countcategory
     */
    public function countCategory();

    /**
     * To get countUser
     */
    public function countUser();

    /**
     * To get countproduct
     */
    public function countProduct();
}
