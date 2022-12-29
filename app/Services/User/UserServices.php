<?php

namespace App\Services\User;

use App\Models\User;
use App\Contracts\Services\User\UserServicesInterface;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for post
 */
class UserServices implements UserServicesInterface
{
    private $userDao;

    public function __construct(UserDaoInterface $UserDao)
    {
        $this->userDao = $UserDao;
    }
    /**
     * To get User
     */
    public function getIndex()
    {
        return $this->userDao->getIndex();
    }

    /**
     * To delete User by id
     */
    public function deleteUser($id)
    {
        return $this->userDao->deleteUser($id);
    }

    public function getUpdate($request, $user)
    {
        return $this->userDao->getUpdate($request, $user);
    }

    /**
     * To updatePassword
     * @return Object
     */
    public function updatePasswordPost($request)
    {
        return $this->userDao->updatePasswordPost($request);
    }

    /**
     * To update profile
     * @return Object
     */
    public function updateProfilePost($request, $id)
    {
        return $this->userDao->updateProfilePost($request, $id);
    }
}
