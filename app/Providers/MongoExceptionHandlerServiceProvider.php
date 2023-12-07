<?php

namespace App\Providers;

use App\Facades\MongoExceptionHandlerFacade;
use Illuminate\Support\ServiceProvider;
use MongoExceptionHandler\MongoExceptionHandler;
class MongoExceptionHandlerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind('mongo-exception-handler', function () {
            return new MongoExceptionHandler();
        });
        $this->app->alias(MongoExceptionHandlerFacade::class, 'MongoExceptionHandler');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
