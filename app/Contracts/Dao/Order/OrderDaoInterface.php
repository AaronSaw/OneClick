<?php

namespace App\Contracts\Dao\Order;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Student
 */
interface OrderDaoInterface
{
    /**
     * To show Order List
     */
    public function getIndex();

    /**
     * To delete Order by id
     */
    public function deleteOrder($id);

    /**
     * @param $table and $description
     * To get count order
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
