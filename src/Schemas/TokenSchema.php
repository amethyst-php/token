<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\TokenTypeManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class TokenSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('token')
                ->setDefault(function ($entity, $attribute) {
                    return $attribute->getManager()->getRepository()->generateToken();
                }),
            Attributes\BelongsToAttribute::make('type_id')
                ->setRelationName('type')
                ->setRelationManager(TokenTypeManager::class)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
