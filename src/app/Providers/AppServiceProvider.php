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
        // Service追加
        $this->app->bind('App\Services\ShopService');
        $this->app->bind('App\Services\UserService');

        // Repository追加
        $this->app->bind(
            \App\Repositories\Interfaces\ShopAccessInterface::class,
            \App\Repositories\ShopRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\UserAccessInterface::class,
            \App\Repositories\UserRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\CouponAccessInterface::class,
            \App\Repositories\CouponRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\PolicyAccessInterface::class,
            \App\Repositories\PolicyRepository::class
        );
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
