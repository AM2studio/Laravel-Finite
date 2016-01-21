<?php

namespace AM2Studio\LaravelFinite;

use Illuminate\Support\Facades\Facade;

class FiniteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'finite';
    }
}
