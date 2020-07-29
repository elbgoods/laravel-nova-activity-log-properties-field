<?php

namespace Elbgoods\LaravelNovaActivityLogPropertiesField\Tests;

use Orchestra\Testbench\TestCase;
use Elbgoods\LaravelNovaActivityLogPropertiesField\LaravelNovaActivityLogPropertiesFieldServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelNovaActivityLogPropertiesFieldServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
