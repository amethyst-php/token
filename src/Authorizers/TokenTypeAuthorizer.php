<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TokenTypeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'token-type.create',
        Tokens::PERMISSION_UPDATE => 'token-type.update',
        Tokens::PERMISSION_SHOW   => 'token-type.show',
        Tokens::PERMISSION_REMOVE => 'token-type.remove',
    ];
}
