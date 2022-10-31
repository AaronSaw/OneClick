<?php

namespace App\Contracts\Services\User;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of User
 */
interface UserServicesInterface
{
  /**
   * To get User
   */
  public function getIndex();

  /**
   * To create User
   */
//  public function storeUser(Request $request);

  /**
   * To edit User by id
   */
//  public function editUser($id);

  /**
   * To get User by id
   */
// public function show($id);

/**
   * To delete User
   */
  public function deleteUser($id);
}
