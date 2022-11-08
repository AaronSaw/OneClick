<?php

namespace App\Contracts\Dao\User;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Student
 */
interface UserDaoInterface
{
  /**
   * To show User List
   */
  public function getIndex();

  /**
   * To delete User by id
   */
  public function deleteUser($id);

//  public function updateUser(Request $request, $id);
    public function getUpdate($request, $user);
}
