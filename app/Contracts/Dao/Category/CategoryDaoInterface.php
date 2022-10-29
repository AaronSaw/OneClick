<?php

namespace App\Contracts\Dao\Category;

use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of category
 */
interface CategoryDaoInterface
{
    /**
     * To get $categorys
     * @return array $categorys
     */
    public function getIndex();

    /**
     * To store $category data
     * @param Request $request request with inputs
     * @return store $category data
     */
    public function getStore(Request $request);

    /**
     * To delete $category data
     * @param category $category
     * @return delete $category data
     */
    public function getDelete(Category $category);

    /**
     * To updata $category data
     * @param Request $request request with inputs
     * @param category $category
     * @return updata $category datta
     */
    public function getUpdate(Request $request, Category $category);
}
