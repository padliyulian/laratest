<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\EmployeeRepository;
use App\Repositories\Interfaces\EmployeeInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            EmployeeInterface::class, 
            EmployeeRepository::class
        );

        $this->app->bind(
            UserInterface::class, 
            UserRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
