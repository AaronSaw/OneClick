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
   * To save User
   */
//  public function storeUser(Request $request);
  /**
   * To get User by id
   */
//  public function show($id);

  /**
   * To delete User by id
   */
  public function deleteUser($id);
   /**
   * To delete User by id
   */
//  public function updateUser(Request $request, $id);
}
