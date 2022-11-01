<?php

namespace App\Providers;

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
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');
        $this->app->bind('App\Contracts\Dao\ProductApi\ProductApiDaoInterface', 'App\Dao\ProductApi\ProductApiDao');

        $this->app->bind('App\Contracts\Services\Category\CategoryServiceInterface', 'App\Services\Category\CategoryService');
        $this->app->bind('App\Contracts\Services\ProductApi\ProductApiServiceInterface', 'App\Services\ProductApi\ProductApiService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
