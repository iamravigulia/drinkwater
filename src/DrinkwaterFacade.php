<?php

namespace Monish\Drinkwater;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Monish\Drinkwater\Skeleton\SkeletonClass
 */
class DrinkwaterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'drinkwater';
    }
}
