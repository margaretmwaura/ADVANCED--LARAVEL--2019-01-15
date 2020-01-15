<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BlogRepository;
use App\Repository\Interfaces\BlogRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        //
        $this->app->bind(
            BlogRepositoryInterface::class,
            BlogRepository::class
        );
    }


}
