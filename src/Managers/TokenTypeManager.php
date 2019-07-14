<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\TokenType                 newEntity()
 * @method \Amethyst\Schemas\TokenTypeSchema          getSchema()
 * @method \Amethyst\Repositories\TokenTypeRepository getRepository()
 * @method \Amethyst\Serializers\TokenTypeSerializer  getSerializer()
 * @method \Amethyst\Validators\TokenTypeValidator    getValidator()
 * @method \Amethyst\Authorizers\TokenTypeAuthorizer  getAuthorizer()
 */
class TokenTypeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.token.data.token-type';
}
