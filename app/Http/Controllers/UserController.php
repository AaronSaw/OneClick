<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ChangePasswordRequest;
use App\Contracts\Services\User\UserServicesInterface;
use App\Http\Requests\UserProfileUpdateRequest;

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
        $users = $this->userInterface->getIndex();
        return view('user.index', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);
        $this->userInterface->getUpdate($request, $user);
        return redirect()->route('user.adminProfile')->with('status',  'Your information has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = $this->userInterface->deleteUser($id);
        return redirect('/userlist');
    }

    public function adminProfile()
    {
        return view('user.adminProfile');
    }

    public function dashboard()
    {
        return view('user.common');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx, csv, xls'
        ]);
        Excel::import(new UsersImport, $request->file);
        return redirect()->route('user.userlist')->with('status', 'User Imported Successfully');
    }

    /**
     * To changePassword
     * @return view
     */
    public function changePassword()
    {
        return view('changePassword');
    }

    /**
     * To updatePassword
     * @param request
     * @return Rediect
     */
    public function updatePassword(ChangePasswordRequest $request)
    {
        $this->userInterface->updatePasswordPost($request);
        return redirect()->route('user.changePassword')->with('success_message', 'Password change successfully.');
    }

    /**
     * To show userProfile
     * @return view
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * To edit userProfile
     * @return view
     */
    public function userEdit()
    {
        return view('profileEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(UserProfileUpdateRequest $request, $id)
    {
        $this->userInterface->updateProfilePost($request, $id);
        return redirect()->route('user.profile')->with('status',  'Your information has been updated Successfully');
    }
}
