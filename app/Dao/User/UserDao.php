<?php

namespace App\Dao\User;
use App\Models\User;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for post
 */
class UserDao implements UserDaoInterface
{
  /**
   * To show Users list
   */
    public function getIndex() {
        $users = User::paginate(5);
        return $users;
    }

    public function deleteUser($id) {
        //User::find($id)->delete();

    }
}
