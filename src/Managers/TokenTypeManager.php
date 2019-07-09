<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class TokenTypeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.token.data.token-type';
}
