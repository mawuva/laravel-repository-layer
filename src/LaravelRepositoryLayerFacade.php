<?php

namespace Mawuekom\LaravelRepositoryLayer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelRepositoryLayer\Skeleton\SkeletonClass
 */
class LaravelRepositoryLayerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-repository-layer';
    }
}
