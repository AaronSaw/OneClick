<?php

namespace App\Dao\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Contracts\Dao\Auth\AuthDaoInterface;

/**
 * Data accessing oobject for post
 */
class AuthDao implements AuthDaoInterface
{
    /**
     * To store post
     * @param request
     * @return object
     */
    public function storePost($request)
    {
        $data = $this->data($request);
        $input = User::create($data);
        return $input;
    }

    /**
     * To create post
     * @param request
     * @return input_data
     */
    public function createPost($request)
    {
        $user_data = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        $input_data = Auth::attempt($user_data);
        return $input_data;
    }

    /**
     * To logout post
     * @return logout
     */
    public function logoutPost()
    {
        $logout = Auth::logout();
        return $logout;
    }

    /**
     * request data
     * @param request
     * @return Array
     */
    private function data($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ];
    }
}
