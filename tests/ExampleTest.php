<?php

namespace Ahilmurugesan\SkeletonDemo\Tests;

use Orchestra\Testbench\TestCase;
use Ahilmurugesan\SkeletonDemo\SkeletonDemoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SkeletonDemoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
