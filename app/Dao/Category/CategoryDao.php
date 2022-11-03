<?php

namespace App\Dao\Category;

use App\Models\Category;
use App\Contracts\Dao\Category\CategoryDaoInterface;
use Illuminate\Http\Request;

/**
 * Data accessing object for Category
 */
class CategoryDao implements CategoryDaoInterface
{
    /**
     * To get $Categorys
     * @return array $Categorys
     */
    public function getIndex()
    {
        $categories = Category::latest('id')->paginate(2)->withQueryString();
        return $categories;
    }

    /**
     * To store $Category data
     * @param Request $request request with inputs
     * @return store $Category data
     */
    public function getStore($request)
    {
        $category = new Category();
        $category->ctitle = $request->ctitle;
        $category->save();
    }

    /** To delete $Category data
     * @param Category $Category
     * @return delete $Category data
     */
    public function getDelete($category)
    {
        $category->product()->delete();
        $category->delete();
    }

    /**
     * @param Request $request request with inputs
     * @param Category $Category
     * To updata $Category data
     * @return update $Category data
     */
    public function getUpdate($request, $category)
    {
        $category->ctitle = $request->ctitle;
        $category->update();
    }
}
