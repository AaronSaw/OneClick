<?php

namespace App\Dao\CategoryApi;

use App\Models\Category;
use App\Contracts\Dao\CategoryApi\CategoryApiDaoInterface;

/**
 * Data accessing object for Category
 */
class CategoryApiDao implements CategoryApiDaoInterface
{
    /**
     * To get $Categorys
     * @return array $Categorys
     */
    public function getIndex()
    {
        $categories=Category::all();
        return $categories;
    }

    /**
     * To get $Categorys
     * @return array $Categorys
     */
    public function getShow($id)
    {
        $category=Category::find($id);
        return $category;
    }
}
