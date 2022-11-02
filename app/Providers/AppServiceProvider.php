<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator  as  PaginationPaginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Dao\Product\ProductDaoInterface', 'App\Dao\Product\ProductDao');
        //Dao Registeration
        $this->app->bind('App\Contracts\Dao\Auth\AuthDaoInterface', 'App\Dao\Auth\AuthDao');

        //Business Logic Registeration
        $this->app->bind('App\Contracts\Services\Auth\AuthServiceInterface', 'App\Services\Auth\AuthService');
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');
        $this->app->bind('App\Contracts\Dao\CategoryApi\CategoryApiDaoInterface', 'App\Dao\CategoryApi\CategoryApiDao');

        $this->app->bind('App\Contracts\Services\Product\ProductServiceInterface', 'App\Services\Product\ProductService');
        $this->app->bind('App\Contracts\Services\Category\CategoryServiceInterface', 'App\Services\Category\CategoryService');
        $this->app->bind('App\Contracts\Services\CategoryApi\CategoryApiServiceInterface', 'App\Services\CategoryApi\CategoryApiService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PaginationPaginator::useBootstrap();
    }
}
