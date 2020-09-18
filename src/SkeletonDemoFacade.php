<?php

namespace Ahilmurugesan\SkeletonDemo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahilmurugesan\SkeletonDemo\Skeleton\SkeletonClass
 */
class SkeletonDemoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton-demo';
    }
}
