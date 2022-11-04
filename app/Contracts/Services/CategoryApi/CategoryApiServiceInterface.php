<?php

namespace App\Contracts\Services\CategoryApi;

/**
 * Interface for major service
 */
interface CategoryApiServiceInterface
{
    /**
     * To get category list
     * @return array $category
     */
    public function getIndex();

    /**
     * To get category list
     * @return array $category
     */
    public function getShow($id);
}
