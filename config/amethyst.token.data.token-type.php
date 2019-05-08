<?php

return [
    'table'      => 'amethyst_token_types',
    'comment'    => 'TokenType',
    'model'      => Railken\Amethyst\Models\TokenType::class,
    'schema'     => Railken\Amethyst\Schemas\TokenTypeSchema::class,
    'repository' => Railken\Amethyst\Repositories\TokenTypeRepository::class,
    'serializer' => Railken\Amethyst\Serializers\TokenTypeSerializer::class,
    'validator'  => Railken\Amethyst\Validators\TokenTypeValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\TokenTypeAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\TokenTypeFaker::class,
    'manager'    => Railken\Amethyst\Managers\TokenTypeManager::class,
];
