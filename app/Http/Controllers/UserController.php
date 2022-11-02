<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Contracts\Services\User\UserServicesInterface;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserController extends Controller
{
    private $userInterface;
    public function __construct(UserServicesInterface $UserServicesInterface)
    {
        $this->userInterface = $UserServicesInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=$this->userInterface->getIndex();
        return view('user.index',compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.userEditForm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user');
    }

    public function adminProfile() {
        return view('user.adminProfile');
    }
}

