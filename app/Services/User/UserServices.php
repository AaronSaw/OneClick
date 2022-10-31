<?php

namespace App\Services\User;

use App\Models\User;
use App\Contracts\Services\User\UserServicesInterface;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
  public function getIndex() {
    return $this->userDao->getIndex();
  }

  /**
   * To get User by ID
   */
//  public function show($id) {
//    return $this->userDao->show($id);
//  }
  /**
   * To create User
   */
//  public function storeUser(request $request) {
//    return $this->userDao->storeUser($request);
//  }

  /**
   * To edit User by id
   */
//  public function editUser($id) {
//    $User = User::find($id);
//    return $User;
//  }
//  public function updateUser(Request $request, $id) {
//    return $this->userDao->updateUser($request, $id);
//  }
/**
  * To delete User by id
*/
    public function deleteUser($id) {
        return $this->userDao->deleteUser($id);
    }
}
