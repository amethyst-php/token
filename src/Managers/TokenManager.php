<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Token                 newEntity()
 * @method \Amethyst\Schemas\TokenSchema          getSchema()
 * @method \Amethyst\Repositories\TokenRepository getRepository()
 * @method \Amethyst\Serializers\TokenSerializer  getSerializer()
 * @method \Amethyst\Validators\TokenValidator    getValidator()
 * @method \Amethyst\Authorizers\TokenAuthorizer  getAuthorizer()
 */
class TokenManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.token.data.token';
}
