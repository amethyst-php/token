<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:fresh');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\TokenServiceProvider::class,
            \Amethyst\Providers\UserServiceProvider::class,
            \Amethyst\Providers\AuthenticationServiceProvider::class,
        ];
    }
}
