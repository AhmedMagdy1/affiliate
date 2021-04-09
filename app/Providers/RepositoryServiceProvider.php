<?php

namespace App\Providers;

use App\Repository\GovernorateRepository;
use App\Repository\GovernorateRepositoryInterface;
use App\Repository\OrderRepository;
use App\Repository\OrderRepositoryInterface;
use App\Repository\PlanRepository;
use App\Repository\PlanRepositoryInterface;
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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(GovernorateRepositoryInterface::class, GovernorateRepository::class);
        $this->app->bind(PlanRepositoryInterface::class, PlanRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }
}
