<?php

namespace App\Contracts\Services\Category;

use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Interface for major service
 */
interface CategoryServiceInterface
{
    /**
     * To get majors list
     * @return array $majors
     */
    public function getIndex();

    /**
     * To store $major data
     * @param Request $request request with inputs
     * @return  Store $major data
     */
    public function getStore(Request $request);

    /**
     * To delete $major data
     * @param major $major
     * @return   delete $major data
     */
    public function getDelete(Category $category);

    /**
     * To update $major data
     * @param Request $request request with inputs
     * @param major $major
     * @return Update $major data
     */
    public function getUpdate(Request $request, Category $category);
}
