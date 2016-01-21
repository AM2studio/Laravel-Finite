<?php

namespace AM2Studio\LaravelFinite;

use Illuminate\Support\Facades\Facade;

/**
 * Class FiniteFacade
 * @package AM2Studio\LaravelFinite
 */
class FiniteFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'finite';
    }
}
