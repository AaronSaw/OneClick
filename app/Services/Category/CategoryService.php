<?php

namespace App\Services\Category;

use App\Models\Category;
use App\Contracts\Services\Category\CategoryServiceInterface;
use App\Contracts\Dao\Category\CategoryDaoInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{
    private $categoryDao;
    public function __construct(CategoryDaoInterface $categoryDao)
    {
        $this->categoryDao = $categoryDao;
    }

    /**
     * To get Category list
     * @return array $Categorys list
     */
    public function getIndex()
    {
        return $this->categoryDao->getIndex();
    }

    /**
     * To store $Category Data
     * @param Request $request request with inputs
     * @return Store $Category data
     */
    public function getStore(Request $request)
    {
        return  $this->categoryDao->getStore($request);
    }

    /**
     * To Delete data
     * @param Category $Category
     * @return Delete $Category data
     */
    public function getDelete(Category $category)
    {
        return $this->categoryDao->getDelete($category);
    }

    /**
     * To Update $Category data
     * @param Request $request request with inputs
     * @param Category $Category
     * @return updata $Category data
     */
    public function getUpdate(Request $request,Category $category)
    {
        return $this->categoryDao->getUpdate($request,$category);
    }
}
