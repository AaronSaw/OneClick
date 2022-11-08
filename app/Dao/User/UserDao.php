<?php

namespace App\Dao\User;
use App\Models\User;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = User::findOrfail($id);
        $user->delete();
    }

    public function getUpdate($request, $id)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->save();
    }
}
