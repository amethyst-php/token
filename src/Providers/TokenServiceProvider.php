<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class TokenServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\UserServiceProvider::class);
    }
}
