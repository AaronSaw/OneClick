<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Contracts\Services\User\UserServicesInterface;
use App\Imports\UsersImport;
use Illuminate\Http\Request;

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
            'name'=> 'required',
            'address'=>'required',
            'email'=>'required',
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
}
