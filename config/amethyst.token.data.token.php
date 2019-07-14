<?php

return [
    'table'      => 'amethyst_tokens',
    'comment'    => 'Token',
    'model'      => Amethyst\Models\Token::class,
    'schema'     => Amethyst\Schemas\TokenSchema::class,
    'repository' => Amethyst\Repositories\TokenRepository::class,
    'serializer' => Amethyst\Serializers\TokenSerializer::class,
    'validator'  => Amethyst\Validators\TokenValidator::class,
    'authorizer' => Amethyst\Authorizers\TokenAuthorizer::class,
    'faker'      => Amethyst\Fakers\TokenFaker::class,
    'manager'    => Amethyst\Managers\TokenManager::class,
];
