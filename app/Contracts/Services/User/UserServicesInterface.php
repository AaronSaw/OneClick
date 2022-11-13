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

    public function getUpdate($request, $user);

    /**
     * To updatePassword
     * @return Object
     */
    public function updatePasswordPost($request);

    /**
     * To update profile
     * @return Object
     */
    public function updateProfilePost($request,$id);
}
