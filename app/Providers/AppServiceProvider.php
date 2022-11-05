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

        //Dao Registeration
        $this->app->bind('App\Contracts\Dao\Auth\AuthDaoInterface', 'App\Dao\Auth\AuthDao');
        $this->app->bind('App\Contracts\Dao\Auth\ForgotDaoInterface', 'App\Dao\Auth\ForgotDao');
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');

        //Business Logic Registeration
        $this->app->bind('App\Contracts\Services\Auth\AuthServiceInterface', 'App\Services\Auth\AuthService');
        $this->app->bind('App\Contracts\Services\Auth\ForgotServiceInterface', 'App\Services\Auth\ForgotService');
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');
        $this->app->bind('App\Contracts\Dao\CategoryApi\CategoryApiDaoInterface', 'App\Dao\CategoryApi\CategoryApiDao');

        //SKM Dao registeration
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');
        $this->app->bind('App\Contracts\Dao\ProductApi\ProductApiDaoInterface', 'App\Dao\ProductApi\ProductApiDao');
        $this->app->bind('App\Contracts\Dao\Product\ProductDaoInterface', 'App\Dao\Product\ProductDao');
        $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');
        $this->app->bind('App\Contracts\Dao\Order\OrderDaoInterface', 'App\Dao\Order\OrderDao');

        //Service Registeration
        $this->app->bind('App\Contracts\Services\Category\CategoryServiceInterface', 'App\Services\Category\CategoryService');
        $this->app->bind('App\Contracts\Services\CategoryApi\CategoryApiServiceInterface', 'App\Services\CategoryApi\CategoryApiService');
        $this->app->bind('App\Contracts\Services\ProductApi\ProductApiServiceInterface', 'App\Services\ProductApi\ProductApiService');
        $this->app->bind('App\Contracts\Services\Product\ProductServiceInterface', 'App\Services\Product\ProductService');
        $this->app->bind('App\Contracts\Services\User\UserServicesInterface', 'App\Services\User\UserServices');
        $this->app->bind('App\Contracts\Services\Order\OrderServicesInterface', 'App\Services\Order\OrderServices');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.custom-pagi');
    }
}
