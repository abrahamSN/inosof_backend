<?php

namespace App\Providers;

use App\Repositories\VehicleRepository;
use App\Repositories\VehicleRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            VehicleRepositoryInterface::class,
            VehicleRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
