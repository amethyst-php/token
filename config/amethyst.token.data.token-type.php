<?php

return [
    'table'      => 'amethyst_token_types',
    'comment'    => 'TokenType',
    'model'      => Amethyst\Models\TokenType::class,
    'schema'     => Amethyst\Schemas\TokenTypeSchema::class,
    'repository' => Amethyst\Repositories\TokenTypeRepository::class,
    'serializer' => Amethyst\Serializers\TokenTypeSerializer::class,
    'validator'  => Amethyst\Validators\TokenTypeValidator::class,
    'authorizer' => Amethyst\Authorizers\TokenTypeAuthorizer::class,
    'faker'      => Amethyst\Fakers\TokenTypeFaker::class,
    'manager'    => Amethyst\Managers\TokenTypeManager::class,
];
