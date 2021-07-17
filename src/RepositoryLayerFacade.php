<?php

namespace Mawuekom\RepositoryLayer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\RepositoryLayer\Skeleton\SkeletonClass
 */
class RepositoryLayerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'repository-layer';
    }
}
