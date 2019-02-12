<?php

return [
    'table'      => 'amethyst_tokens',
    'comment'    => 'Token',
    'model'      => Railken\Amethyst\Models\Token::class,
    'schema'     => Railken\Amethyst\Schemas\TokenSchema::class,
    'repository' => Railken\Amethyst\Repositories\TokenRepository::class,
    'serializer' => Railken\Amethyst\Serializers\TokenSerializer::class,
    'validator'  => Railken\Amethyst\Validators\TokenValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\TokenAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\TokenFaker::class,
    'manager'    => Railken\Amethyst\Managers\TokenManager::class,
];
