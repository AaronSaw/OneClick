<?php

namespace App\Dao\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Contracts\Dao\User\UserDaoInterface;

/**
 * Data accessing object for post
 */
class UserDao implements UserDaoInterface
{
    /**
     * To show Users list
     */
    public function getIndex()
    {
        $users = User::paginate(5);
        return $users;
    }

    public function deleteUser($id)
    {
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

    /**
     * To updatePasswordPost
     * @param request
     * @return data
     */
    public function updatePasswordPost($request)
    {
        $data = User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return $data;
    }

    /**
     * To Update User data
     * @param request,id
     */
    public function updateProfilePost($request, $id)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $data = $user->update();
        return $data;
    }
}
