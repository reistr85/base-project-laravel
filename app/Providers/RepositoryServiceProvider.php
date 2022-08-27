<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\IUserRepository',
            'App\Repositories\UserRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\ICustomerRepository',
            'App\Repositories\CustomerRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\ICategoryRepository',
            'App\Repositories\CategoryRepository');
        $this->app->bind(
            'App\Repositories\Interfaces\IProductRepository',
            'App\Repositories\ProductRepository');
    }
}
