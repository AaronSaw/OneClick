<?php

namespace App\Contracts\Dao\CategoryApi;

/**
 * Interface for Data Accessing Object of category
 */
interface CategoryApiDaoInterface
{
    /**
     * To get $categorys
     * @return array $categorys
     */
    public function getIndex();

    /**
     * To get $categorys
     * @return array $categorys
     */
    public function getShow($id);
}
