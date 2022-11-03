<?php

namespace App\Services\CategoryApi;

use App\Contracts\Services\CategoryApi\CategoryApiServiceInterface;
use App\Contracts\Dao\CategoryApi\CategoryApiDaoInterface;

class CategoryApiService implements CategoryApiServiceInterface
{
    private $categoryapiDao;
    public function __construct(CategoryApiDaoInterface $categoryapiDao)
    {
        $this->categoryapiDao = $categoryapiDao;
    }

    /**
     * To get Category list
     * @return array $Categorys list
     */
    public function getIndex()
    {
        return $this->categoryapiDao->getIndex();
    }

    /**
     * To get Category list
     * @return array $Categorys list
     */
    public function getShow($id)
    {
        return $this->categoryapiDao->getShow($id);
    }
}
