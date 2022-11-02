<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator  as  PaginationPaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');
        $this->app->bind('App\Contracts\Services\User\UserServicesInterface', 'App\Services\User\UserServices');
=======
        $this->app->bind('App\Contracts\Dao\Product\ProductDaoInterface', 'App\Dao\Product\ProductDao');
>>>>>>> f819ac2bced6f0da3c969d0ff61b71d786de81fa
        //Dao Registeration
        $this->app->bind('App\Contracts\Dao\Auth\AuthDaoInterface', 'App\Dao\Auth\AuthDao');

        //Business Logic Registeration
        $this->app->bind('App\Contracts\Services\Auth\AuthServiceInterface', 'App\Services\Auth\AuthService');
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');

        $this->app->bind('App\Contracts\Services\Product\ProductServiceInterface', 'App\Services\Product\ProductService');
        $this->app->bind('App\Contracts\Services\Category\CategoryServiceInterface', 'App\Services\Category\CategoryService');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        Paginator::defaultView('vendor.pagination.custom-pagi');
=======
        PaginationPaginator::useBootstrap();
>>>>>>> f819ac2bced6f0da3c969d0ff61b71d786de81fa
    }
}
