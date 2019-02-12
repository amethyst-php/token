<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TokenAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'token.create',
        Tokens::PERMISSION_UPDATE => 'token.update',
        Tokens::PERMISSION_SHOW   => 'token.show',
        Tokens::PERMISSION_REMOVE => 'token.remove',
    ];
}
