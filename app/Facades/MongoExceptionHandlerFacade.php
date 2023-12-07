<?php

namespace App\Facades;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Facade;

class MongoExceptionHandlerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mongo-exception-handler';
    }
}