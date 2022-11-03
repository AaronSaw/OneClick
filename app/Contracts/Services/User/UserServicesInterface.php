<?php

namespace App\Contracts\Services\User;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of User
 */
interface UserServicesInterface
{
    /**
     * To get User
     */
    public function getIndex();


        /**
     * To delete User
     */
    public function deleteUser($id);
}
