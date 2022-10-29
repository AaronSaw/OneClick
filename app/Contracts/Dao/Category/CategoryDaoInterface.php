<?php

namespace App\Contracts\Dao\Category;

use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Blog
 */
interface CategoryDaoInterface
{
       /**
   * To get $blogs
   * @return array $blogs
   */
  public function getIndex();
  /**
  * To store $blog data
  * @param Request $request request with inputs
  * @return store $blog data
  */
 public function getStore(Request $request);
  /**
  * To delete $blog data
  * @param Blog $blog
  * @return delete $blog data
  */
 public function getDelete(Category $category);
  /**
  * To updata $blog data
  * @param Request $request request with inputs
  * @param Blog $blog
  * @return updata $blog datta
  */
 public function getUpdate(Request $request,Category $category);
}
