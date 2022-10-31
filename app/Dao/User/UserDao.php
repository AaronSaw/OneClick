<?php

namespace App\Dao\User;
use App\Models\User;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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

    //public function show($id)
    //{
    //    $user= User::findOrFail($id);
    //    return $user;
    //}

    public function deleteUser($id) {
        //User::find($id)->delete();

    }
}
