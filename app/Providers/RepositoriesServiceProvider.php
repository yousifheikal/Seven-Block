<?php

namespace App\Providers;
use App\Repositories\Category\CategoryRepositoriesInterface;
use App\Repositories\CommentCustomer\CommentCustomerRepositoriesInterface;
use App\Repositories\Product\ProductRepositoriesInterface;
use App\Repositories\Schedule\ScheduleRepositoriesInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Users\UserRepositoriesInterface',
            'App\Repositories\Users\UserRepositories'
        );

        $this->app->bind(
            'App\Repositories\Category\CategoryRepositoriesInterface',
            'App\Repositories\Category\CategoryRepositories'
        );

        $this->app->bind(
            'App\Repositories\Product\ProductRepositoriesInterface',
            'App\Repositories\Product\ProductRepositories'
        );

        $this->app->bind(
            'App\Repositories\Schedule\ScheduleRepositoriesInterface',
            'App\Repositories\Schedule\ScheduleRepositories'
        );

        $this->app->bind(
            'App\Repositories\Time_Sheet\projects\ProjectRepositoriesInterface',
            'App\Repositories\Time_Sheet\projects\ProjectRepositories'
        );

        $this->app->bind(
            'App\Repositories\Checkout\CheckoutRepositoriesInterface',
            'App\Repositories\Checkout\CheckoutRepositories'
        );

        $this->app->bind(
            'App\Repositories\CommentCustomer\CommentCustomerRepositoriesInterface',
            'App\Repositories\CommentCustomer\CommentCustomerRepositories'
        );
    }
}
